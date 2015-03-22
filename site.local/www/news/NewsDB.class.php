<?php
require 'INewsDB.class.php';

class NewsDB implements INewsDB{
    protected $_db;
    const DB_NAME = 'Z:\home\site.local\www\news\news.db';
    const RSS_NAME = "rss.xml";
    const RSS_TITLE = "Новостная лента";
    const RSS_LINK = "http://site.local/news/news.php";
    function __construct(){
        if(is_file(self::DB_NAME)){
            $this->_db = new SQLite3(self::DB_NAME);
        } else{
            $this->_db = new SQLite3(self::DB_NAME);

            $sql = "CREATE TABLE msgs(
                        id INTEGER PRIMARY KEY AUTOINCREMENT,
                        title TEXT,
                        category INTEGER,
                        description TEXT,
                        source TEXT,
                        datetime INTEGER
                    )";

            $this->_db->exec($sql) or die($this->_db->lastErrorMsg());

            $sql = "CREATE TABLE category(
                        id INTEGER,
                        name TEXT
                    )";
            $this->_db->exec($sql) or die($this->_db->lastErrorMsg());

            $sql = "INSERT INTO category(id, name)
                    SELECT 1 as id, 'Политика' as name
                    UNION SELECT 2 as id, 'Культура' as name
                    UNION SELECT 3 as id, 'Спорт' as name ";
            $this->_db->exec($sql) or die($this->_db->lastErrorMsg());
        }
    }
    function __destruct(){
        unset($this->_db);
    }
    function saveNews($title, $category, $description, $source)
    {
        try{
            $dt = time();
            $sql = "INSERT INTO msgs(title, category, description, source, datetime)
                    VALUES('$title', '$category', '$description', '$source', '$dt')";
            $res = $this->_db->exec($sql);
            if(!res)
                throw new Exception($this->_db->lastErrorMsg());
            $this->createRss();
            return true;
        }catch (Exception $e){
//             echo '$this->_db->lastErrorMsg()';
            return false;
        }
    }
    protected function db2Arr($data){
        $arr = array();
        while($row = $data->fetchArray(SQLITE3_ASSOC))
            $arr[] = $row;
        return $arr;
    }
    function getNews()
    {
        try{
            $sql = "SELECT msgs.id as id, title, category.name as category, description, source, datetime
                    FROM msgs, category
                    WHERE category.id=msgs.category
                    ORDER BY msgs.id DESC";
            $res = $this->_db->query($sql);
            if(!is_object($res))
                throw new Exception($this->_db->lastErrorMsg());
            return $this->db2Arr($res);
        }catch (Exception $e){
//            echo $e->getMessage();
            return false;
        }
    }
    function deleteNews($id)
    {
        try{
            $sql = "DELETE FROM msgs WHERE id=$id";
            $res = $this->_db->query($sql);
            if(!res){
                throw new Exception($this->_db->lastErrorMsg());
            }
            return true;
        }catch (Exception $e){
//            echo $e->getMessage();
            return false;
        }
    }
    function clearStr($data){
        $data = trim(strip_tags($data));
        return $this->_db->escapeString($data);
    }
    function clearInt($data){
        return abs((int)$data);
    }
    function createRss(){
        $dom = new DOMDocument('1.0', 'utf-8');
        $dom->formatOutput = true;
        $dom->preserveWhiteSpace = false;
        $rss = $dom->createElement('rss');
        $dom->appendChild($rss);
        $chanel = $dom->createElement('channel');
        $rss->appendChild($chanel);
        $t = $dom->createElement('title', self::RSS_NAME);
        $l = $dom->createElement('link', self::RSS_LINK);
        $chanel->appendChild($t);
        $chanel->appendChild($l);
        $lenta = $this->getNews();
        if(!$lenta)
            return false;
        foreach($lenta as $news){
            $i = $dom->createElement('item');
            $t = $dom->createElement('title', $news['title']);
            $c = $dom->createElement('category', $news['category']);
            $d = $dom->createElement('description', $news['description']);
            $txt = self::RSS_LINK.'?id=' . $news['id'];
            $l = $dom->createElement('link', $txt);
            $dt = date('r', $news['datetime']);
            $pd = $dom->createElement('pubDate', $dt);
            $i->appendChild($t);
            $i->appendChild($l);
            $i->appendChild($d);
            $i->appendChild($pd);
            $i->appendChild($c);
            $chanel->appendChild($i);
        }
        $dom->save(self::RSS_NAME);
    }
}
?>