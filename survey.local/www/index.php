<?php

class survey {

    var $pageName = "index.php";
    var $userData = array();
    var $surveyToMail = "semvit@ukr.net, pr@uul.com.ua, uul@uul.com.ua";
    var $surveyFromMail = "survey@uul.com.ua";
    
    var $locale = "en";
    
    var $lang = array(
        "ua"    =>  array(
        ),
        "en"    =>  array(
            "title"             =>  "Survey",  /**/
            "form_title"        =>  "<p>ANNUAL SURVEY</p><p>LEASEUROPE QUESTS</p><p>2014 Half of year</p>", /**/
            "form_info"         =>  "Оплата здійснюється на підставі рахунку, виставленого  від Організаторів при наявності заповненої реєстраційної форми, Дякуємо!",
            "form_warning"      =>  "Fields marked with <span class=\"red\">*</span> are mandatory.",
            "form_submit"       =>  "Check and send",
            "pe"                =>  "Data",
            "co"                =>  "Company",
            "employees_num"     =>  "Number of employees",
            "co_name"           =>  "Name of company",
            "pe_fio"            =>  "Name/s",
            "pe_pos"            =>  "Position",
            "co_tel"            =>  "Phone",
            "co_email"          =>  "Email",
            "pe_email"      =>  "Email",
            "field"         =>  "Field",
            "mast"          =>  "needs to be filled.",
            "send_failed"   =>  "Unable to send the application form. Sorry for the inconvenience.",
            "send_success"  =>  "Application Form was sent. Thank you for the information provided.",
        )
    );
    
    
    var $writeArray = array (
    
        "1_title"           =>  "<p> LEASING (incl. Long Term Rental)</p><p>Part I. EQUIPMENT (incl. vehicles)</p>",
        "1_label"           =>  "<p>1  NEW BUSINESS</p>",
        
        "1_1"               =>  "<p> 1.1 VALUE of new leasing/long term </p>rental contracts in millions of local currency",
        
        "1_1_1"             =>  " 1.1.1 By type of equipment",
        "1_1_1_a"           =>  " Machinery & industrial equipment",
        "1_1_1_b"           =>  "  Computers & business machines",
        "1_1_1_c"           =>  "  Commercial vehicles",
        "1_1_1_d"           =>  "  Passenger cars",
        "1_1_1_e"           =>  "  Ships",
        "1_1_1_f"           =>  "  Aircraft",
        "1_1_1_g"           =>  "  Railways and rolling stock",
        "1_1_1_h"           =>  "  Agricultural transport & equipment",
        "1_1_1_i"           =>  "  Other types of equipment",
        
        
        
        "1_1_2"             =>  " 1.1.2 By type of customer",
        "1_1_2_a"           =>  "  Private sector",
        "1_1_2_a1"          =>  "   Agriculture, forest & fishing",
        "1_1_2_a2"          =>  "   Manufacturing industry & construction",
        "1_1_2_a3"          =>  "   Services",
        "1_1_2_b"           =>  "  Public sector",
        "1_1_2_c"           =>  "  Consumers",
        "1_1_2_d"           =>  "  Other types of customers",
        
        "1_1_3"             =>  " 1.1.3 By primary contract term",
        "1_1_3_a"           =>  "  Up to and including 2 years",
        "1_1_3_b"           =>  "  Up to and including 5 years",
        "1_1_3_c"           =>  "  Up to and including 10 years",
        "1_1_3_d"           =>  "  Longer than 10 years",
        
        "1_2"               =>  "1.2 TOTAL NUMBER of new contracts <br> granted in the year",
        
        "2_label"           =>  "2 PORTFOLIO (in millions <br> of local currency)",
        
        "2_1"               =>  " Value after depreciation <br> of all equipment on lease at year end",
        "2_2"               =>  " Value of outstanding <br> equipment leasing contracts at year end",
        "2_3"               =>  " Value at cost of all <br> equipment on lease at year end",
    
        /**/
        
        "P2_1_title"        =>  "<p> LEASING (incl. Long Term Rental)</p><p>Part II. REAL ESTATE</p>",
        "P2_1_label"        =>  "<p>1  NEW BUSINESS</p>",
        
        "P2_1_1"            =>  "<p> 1.1. VALUE of new leasing contracts </p> in millions of local currency",
        
        "P2_1_1_1"          =>  " 1.1.1 By type of building",
        "P2_1_1_1_a"        =>  "Industrial buildings",
        "P2_1_1_1_b"        =>  "Retail outlets",
        "P2_1_1_1_c"        =>  "Office buildings",
        "P2_1_1_1_d"        =>  "Hotels & leisure",
        "P2_1_1_1_e"        =>  "Utilities",
        "P2_1_1_1_f"        =>  "Other types of  buildings",
        
        "P2_1_1_2"          =>  " 1.1.2 By primary contract term",
        
        "P2_1_1_2_a"        =>  "Up to and including 8 years",
        "P2_1_1_2_b"        =>  "Up to and including 16 years",
        "P2_1_1_2_c"        =>  "Up to and including 20 years",
        "P2_1_1_2_d"        =>  "Longer than 20 years",
        
        "P2_1_2"            =>  "TOTAL NUMBER of new contracts<br> granted in the year",

        "P2_2_label"        =>  "2 PORTFOLIO (in millions of local currency)",
        
        "P2_2_1"            =>  " Value after depreciation <br> of all real estate on lease at year end",
        "P2_2_2"            =>  " Value of outstanding real <br> estate leasing contracts at year end",
        "P2_2_3"            =>  " Value at cost of all real <br> estate on lease at year end",
        
        
        /**/
        
        "C_1_title"         =>  "<p> HIRE PURCHASE </p><p>HIRE PURCHASE of EQUIPMENT (incl. vehicles)</p>",
        "C_1_label"         =>  "<p>1  NEW BUSINESS</p>",
        
        "C_1_1"             =>  "<p> 1.1. VALUE of new hire purchase contracts </p> in millions of local currency",
        
        "C_1_1_1"           =>  " 1.1.1 By type of equipment",
        "C_1_1_1_a"         =>  "Machinery & industrial equipment",
        "C_1_1_1_b"         =>  "Computers & business machines",
        "C_1_1_1_c"         =>  "Commercial vehicles",
        "C_1_1_1_d"         =>  "Passenger cars",
        "C_1_1_1_e"         =>  "Ships",
        "C_1_1_1_f"         =>  "Aircraft",
        "C_1_1_1_g"         =>  "Railways and rolling stock",
        "C_1_1_1_h"         =>  "Agricultural transport & equipment",
        "C_1_1_1_i"         =>  "Other types of equipment",
        
        "C_1_1_2"           =>  " 1.1.2 By type of customer",
        
        "C_1_1_2_a"         =>  " Private sector",
        "C_1_1_2_a1"        =>  " Agriculture, forest & fishing",
        "C_1_1_2_a2"        =>  " Manufacturing industry & construction",
        "C_1_1_2_a3"        =>  " Services",
        "C_1_1_2_b"         =>  "Public sector",
        "C_1_1_2_c"         =>  "Consumer",
        "C_1_1_2_d"         =>  "Other type of customers",
        
        "C_1_1_3"           =>  " 1.1.3 By primary contract term",
        
        "C_1_1_3_a"         =>  "Up to and including 2 years",
        "C_1_1_3_b"         =>  "Up to and including 5 years",
        "C_1_1_3_c"         =>  "Up to and including 10 years",
        "C_1_1_3_d"         =>  "Longer than 10 years",

        "C_1_2"             =>  "TOTAL NUMBER of new contracts<br> granted in the year",

        "C_2_label"         =>  "2 PORTFOLIO (in millions of local currency)",
        
        "C_2_1"             =>  " Value after depreciation of all equipment<br> on hire purchase at year end",
        "C_2_2"             =>  " Value of outstanding equipment<br> on hire purchase at year end",
        "C_2_3"             =>  " Value at cost of all equipment<br> on hire purchase at year end",
        
        
        
        /**/
        "D_1_title"         =>  "<p> AUTOMOTIVE DETAIL </p><p>Part I. PASSENGER CAR FIGURES</p>",
        "D_1_label"         =>  "<p>1  NEW BUSINESS</p>",
        
        
        
        "D_1_1"             =>  "<p> TOTAL AMOUNT of New Business</p> for Passenger Cars <br>(in millions of local currency)",
        
        "D_1_1_1"           =>  " 1.1.1 By Product Type",
        "D_1_1_1_a"         =>  "Finance Leasing",
        "D_1_1_1_b"         =>  "Operating Leasing",
        "D_1_1_1_c"         =>  "Hire Purchase",

        "D_1_1_2"           =>  " 1.1.2 New or Used",
        "D_1_1_2_a"         =>  "New Passenger Cars",
        "D_1_1_2_b"         =>  "Used Passenger Cars",

        "D_1_1_3"           =>  " 1.1.3 By Use",
        "D_1_1_3_a"         =>  "Passenger Cars for Private Use",
        "D_1_1_3_b"         =>  "Passenger Cars for Business Use",

        
        "D_1_2"             =>  "TOTAL NUMBER of New Contracts <br> Granted in the Year for Passenger Cars",
        
        "D_1_2_1"           =>  " 1.2.1 By Product Type",
        "D_1_2_1_a"         =>  "Finance Leasing",
        "D_1_2_1_b"         =>  "Operating Leasing",
        "D_1_2_1_c"         =>  "Hire Purchase",

        "D_1_2_2"           =>  " 1.2.2 New or Used",
        "D_1_2_2_a"         =>  "New Passenger Cars",
        "D_1_2_2_b"         =>  "Used Passenger Cars",
        
        "D_1_2_3"           =>  " 1.2.3 By Use",
        "D_1_2_3_a"         =>  "Passenger Cars for Private Use",
        "D_1_2_3_b"         =>  "Passenger Cars for Business Use",

        "D_1_2_4"           =>  " 1.2.4 By Original Contract Term ",
        "D_1_2_4_a"         =>  "up to and incl 12 months",
        "D_1_2_4_b"         =>  "up to and incl 24 months",
        "D_1_2_4_c"         =>  "up to and incl 36 months",
        "D_1_2_4_d"         =>  "up to and incl 48 months",
        "D_1_2_4_e"         =>  "up to and incl 60 months",
        "D_1_2_4_f"         =>  " > than 60 months",
        
        "D_1_2_5"           =>  " 1.2.5 Average time vehicles are kept<br> within the lessor's fleet<br> (lessor's holding period, in months)",
        
        "D_1_2_6"           =>  " 1.2.6 By Level of Services",
        "D_1_2_6_a"         =>  "Passenger Car Contracts with Services",
        "D_1_2_6_b"         =>  "Passenger Car Contracts without Services",
        
        "D_1_2_6_z"         =>  "Services Only Contracts (not include in total amount)",
        
        "D_1_2_7"           =>  " 1.2.7 Additional information - Types of Services<br><br>Please list the number of contracts <br>to which each of the following services is associated",
        "D_1_2_7_a"         =>  "Insurance",
        "D_1_2_7_b"         =>  "Maintenance",
        "D_1_2_7_c"         =>  "Tyres",
        "D_1_2_7_d"         =>  "Fuel",
        "D_1_2_7_e"         =>  "Replacement Vehicles",

        "D_2_label"         =>  "2 PORTFOLIO",
        
        "D_2_1"             =>  " 2.1 AMOUNT (in millions of local currency)",
        
        "D_2_1_1"           =>  " 2.1.1 By Product Type",
        "D_2_1_1_a"         =>  "Finance Leasing",
        "D_2_1_1_b"         =>  "Operating Leasing",
        "D_2_1_1_c"         =>  "Hire Purchase",
        
        "D_2_1_2"           =>  " 2.1.2 By Use",
        "D_2_1_2_a"         =>  "Passenger Cars for Private Use",
        "D_2_1_2_b"         =>  "Passenger Cars for Business Use",
        
        "D_2_2"             =>  " 2.2 NUMBER of Contracts in the Portfolio",
        
        "D_2_2_1"           =>  " 2.2.1 By Product Type",
        "D_2_2_1_a"         =>  "Finance Leasing",
        "D_2_2_1_b"         =>  "Operating Leasing",
        "D_2_2_1_c"         =>  "Hire Purchase",
        
        "D_2_2_2"           =>  " 2.1.2 By Use",
        "D_2_2_2_a"         =>  "Passenger Cars for Private Use",
        "D_2_2_2_b"         =>  "Passenger Cars for Business Use",

        /**/
        "D2_1_title"        =>  "<p> AUTOMOTIVE DETAIL </p><p>Part II. COMMERCIAL VEHICLE FIGURES</p>",
        "D2_1_label"        =>  "<p>1  NEW BUSINESS</p>",
        
        
        
        "D2_1_1"            =>  "<p> TOTAL AMOUNT of New Business</p> for Commerical Vehicles<br> (in millions of local currency)",
        
        "D2_1_1_1"          =>  " 1.1.1 By Vehicle Type",
        "D2_1_1_1_a"        =>  "Light Commerical Vehicles (<=3.5 tonnes)",
        "D2_1_1_1_b"        =>  "Heavy Commercial Vehicles (>3.5 tonnes)",


        "D2_1_1_2"          =>  " 1.1.2 By Product Type",
        "D2_1_1_2_a"        =>  " Finance Leasing",
        "D2_1_1_2_b"        =>  "Operating Leasing",
        "D2_1_1_2_c"        =>  "Hire Purchase",
        
        "D2_1_1_3"          =>  " 1.1.3 New or Used",
        "D2_1_1_3_a"        =>  "New Commercial Vehicles",
        "D2_1_1_3_b"        =>  "Used Commercial Vehicles",

        
        "D2_1_2"            =>  "1.2 TOTAL NUMBER of New Contracts <br> Granted in the Year for Commercial Vehicles",
        
        "D2_1_2_1"          =>  " 1.2.1 By Vehicle Type",
        "D2_1_2_1_a"        =>  "Light Commerical Vehicles (<=3.5 tonnes)",
        "D2_1_2_1_b"        =>  "Heavy Commercial Vehicles (>3.5 tonnes)",


        "D2_1_2_2"          =>  " 1.2.2 By Product Type",
        "D2_1_2_2_a"        =>  "Finance Leasing",
        "D2_1_2_2_b"        =>  "Operating Leasing",
        "D2_1_2_2_c"        =>  "Hire Purchase",
        
        "D2_1_2_3"          =>  " 1.2.3 New or Used",
        "D2_1_2_3_a"        =>  "New Commercial Vehicles",
        "D2_1_2_3_b"        =>  "Used Commercial Vehicles",


        "D2_2_label"        =>  "2 PORTFOLIO",
        
        "D2_2_1"            =>  " 2.1 AMOUNT (in millions of local currency)",
        
        "D2_2_1_1"          =>  " 2.1.1 By Vehicle Type",
        "D2_2_1_1_a"        =>  "Light Commerical Vehicles (<=3.5 tonnes)",
        "D2_2_1_1_b"        =>  "Heavy Commercial Vehicles (>3.5 tonnes)",

        
        "D2_2_1_2"          =>  " 2.1.2 By Product Type",
        "D2_2_1_2_a"        =>  "Finance Leasing",
        "D2_2_1_2_b"        =>  "Operating Leasing",
        "D2_2_1_2_c"        =>  "Hire Purchase",
        
        "D2_2_2"            =>  " 2.2 NUMBER of Contracts in the Portfolio",
        
        "D2_2_2_1"          =>  " 2.2.1 By Vehicle Type",
        "D2_2_2_1_a"        =>  "Light Commerical Vehicles (<=3.5 tonnes)",
        "D2_2_2_1_b"        =>  "Heavy Commercial Vehicles (>3.5 tonnes)",
        
        "D2_2_2_2"          =>  " 2.2.2 By Product Type",
        "D2_2_2_2_a"        =>  "Finance Leasing",
        "D2_2_2_2_b"        =>  "Operating Leasing",
        "D2_2_2_2_c"        =>  "Hire Purchase",
        
        
        
        /**/
        "D3_1_title"        =>  "<p> AUTOMOTIVE DETAIL </p><p>Part III. SHORT TERM RENTAL</p>",
        
        "D3_1_label"        =>  "<p>1  PASSENGER CARS</p>",

        "D3_1_1"            =>  "Number of New Vehicles Bought in the Year",
        "D3_1_2"            =>  "Value of New Vehicles Bought in the Year",
        "D3_1_3"            =>  "Fleet Size (Number of Vehicles)",
        "D3_1_4"            =>  "Depreciated Value of Fleet at Year End",
        "D3_1_5"            =>  "Number of Rentals made in the Year",
        "D3_1_6"            =>  "Agregated Annual Sales <br>(in millions of local currency)",
        "D3_1_7"            =>  "Average Age at Time of Sale<br> (Renter's Holding Period) in months",
        
        "D3_2_label"        =>  "2 LIGHT COMMERCIAL VEHICLES<br> (<=3.5 tonnes)",

        "D3_2_1"            =>  "Number of New Vehicles Bought in the Year",
        "D3_2_2"            =>  "Value of New Vehicles Bought in the Year",
        "D3_2_3"            =>  "Fleet Size (Number of Vehicles)",
        "D3_2_4"            =>  "Depreciated Value of Fleet <br>at Year End",
        "D3_2_5"            =>  "Number of Rentals made in the Year",
        "D3_2_6"            =>  "Agregated Annual Sales<br> (in millions of local currency)",

        "D3_3_label"        =>  "3 HEAVY COMMERCIAL VEHICLES<br> ( > 3.5 tonnes)",

        "D3_3_1"            =>  "Number of New Vehicles <br>Bought in the Year",
        "D3_3_2"            =>  "Value of New Vehicles <br>Bought in the Year",
        "D3_3_3"            =>  "Fleet Size (Number of Vehicles)",
        "D3_3_4"            =>  "Depreciated Value of Fleet at Year End",
        "D3_3_5"            =>  "Number of Rentals made in the Year",
        "D3_3_6"            =>  "Agregated Annual Sales <br>(in millions of local currency)",
        
    );
    
    var $writeRadioArray = array(
    
/*      "D_0_1"             => "Definition of finance lease used here <br>corresponds to IAS 17 Please fill in yes/no",
        "D_0_2"             => "Definition of finance lease used here <br>corresponds to local definition Please fill in yes/no",
        "D_0_3"             => "Definition of operating lease used here <br>corresponds to IAS 17 Please fill in yes/no",
        "D_0_4"             => "Definition of operating lease used here <br>corresponds to local definition Please fill in yes/no",
*/
    );
    var $emptyRadioExceptions = array ( 

    );
    
    var $writeArrayExceptions = array (
        /* */
        "1_title"           =>  "<p> LEASING (incl. Long Term Rental)</p><p>Part I. EQUIPMENT (incl. vehicles)</p>",
        "1_label"           =>  "1  NEW BUSINESS",
        "1_1"               =>  "<p> 1.1 VALUE of new leasing/long term </p>rental contracts in millions of local currency",
        "1_1_1"             =>  " 1.1.1 By type of equipment",
        "1_1_2"             =>  " 1.1.2 By type of customer",
        "1_1_2_a"           =>  "  Private sector",
        "1_1_3"             =>  " 1.1.3 By primary contract term",
        "2_label"           =>  "2 PORTFOLIO (in millions <br> of local currency)",
        
        /* */
        "P2_1_title"        =>  "<p> LEASING (incl. Long Term Rental)</p><p>Part II. REAL ESTATE</p>",
        "P2_1_label"        =>  "<p>1  NEW BUSINESS</p>",
        "P2_1_1"            =>  "<p> 1.1. VALUE of new leasing contracts </p> in millions of local currency",
        "P2_1_1_1"          =>  " 1.1.1 By type of building",
        "P2_1_1_2"          =>  " 1.1.2 By primary contract term",      
        "P2_2_label"        =>  "2 PORTFOLIO (in millions of local currency)",
        
        /* */
        "C_1_title"         =>  "<p> HIRE PURCHASE </p><p>HIRE PURCHASE of EQUIPMENT (incl. vehicles)</p>",
        "C_1_label"         =>  "<p>1  NEW BUSINESS</p>",
        "C_1_1"             =>  "<p> 1.1. VALUE of new hire purchase contracts </p> in millions of local currency",
        "C_1_1_1"           =>  " 1.1.1 By type of equipment",
        "C_1_1_2"           =>  " 1.1.2 By type of customer",
        "C_1_1_2_a"         =>  " Private sector",
        "C_1_1_3"           =>  " 1.1.3 By primary contract term",
        "C_2_label"         =>  "2 PORTFOLIO (in millions of local currency)",
        
        /* */
        "D_1_title"         =>  "<p> AUTOMOTIVE DETAIL </p><p>Part I. PASSENGER CAR FIGURES</p>",
        "D_1_label"         =>  "<p>1  NEW BUSINESS</p>",
        "D_1_1"             =>  "<p> TOTAL AMOUNT of New Business</p> for Passenger Cars (in millions of local currency)",
        "D_1_1_1"           =>  " 1.1.1 By Product Type",
        "D_1_1_2"           =>  " 1.1.2 New or Used",
        "D_1_1_3"           =>  " 1.1.3 By Use",
        "D_1_2"             =>  "TOTAL NUMBER of New Contracts <br> Granted in the Year for Passenger Cars",
        "D_1_2_1"           =>  " 1.2.1 By Product Type",
        "D_1_2_2"           =>  " 1.2.2 New or Used",
        "D_1_2_3"           =>  " 1.2.3 By Use",
        "D_1_2_4"           =>  " 1.2.4 By Original Contract Term ",
        "D_1_2_6"           =>  " 1.2.6 By Level of Services",
        "D_1_2_7"           =>  " 1.2.7 Additional information - Types of Services<br><br>Please list the number of contracts <br>to which each of the following services is associated",
        "D_2_label"         =>  "2 PORTFOLIO",
        "D_2_1"             =>  " 2.1 AMOUNT (in millions of local currency)",
        "D_2_1_1"           =>  " 2.1.1 By Product Type",
        "D_2_1_2"           =>  " 2.1.2 By Use",
        "D_2_2"             =>  " 2.2 NUMBER of Contracts in the Portfolio",
        "D_2_2_1"           =>  " 2.2.1 By Product Type",
        "D_2_2_2"           =>  " 2.1.2 By Use",

        /**/
        "D2_1_title"        =>  "<p> AUTOMOTIVE DETAIL </p><p>Part II. COMMERCIAL VEHICLE FIGURES</p>",
        "D2_1_label"        =>  "<p>1  NEW BUSINESS</p>",
        "D2_1_1"            =>  "<p> TOTAL AMOUNT of New Business</p> for Commerical Vehicles (in millions of local currency)",
        "D2_1_1_1"          =>  " 1.1.1 By Vehicle Type",
        "D2_1_1_2"          =>  " 1.1.2 By Product Type",
        "D2_1_1_3"          =>  " 1.1.3 New or Used",
        "D2_1_2"            =>  "1.2 TOTAL NUMBER of New Contracts <br> Granted in the Year for Commercial Vehicles",
        "D2_1_2_1"          =>  " 1.2.1 By Vehicle Type",
        "D2_1_2_2"          =>  " 1.2.2 By Product Type",
        "D2_1_2_3"          =>  " 1.2.3 New or Used",
        "D2_2_label"        =>  "2 PORTFOLIO",
        "D2_2_1"            =>  " 2.1 AMOUNT (in millions of local currency)",
        "D2_2_1_1"          =>  " 2.1.1 By Vehicle Type",
        "D2_2_1_2"          =>  " 2.1.2 By Product Type",
        "D2_2_2"            =>  " 2.2 NUMBER of Contracts in the Portfolio",
        "D2_2_2_1"          =>  " 2.2.1 By Vehicle Type",
        "D2_2_2_2"          =>  " 2.2.2 By Product Type",

        /**/
        "D3_1_title"        =>  "<p> AUTOMOTIVE DETAIL </p><p>Part III. SHORT TERM RENTAL</p>",
        "D3_1_label"        =>  "<p>1  PASSENGER CARS</p>",
        "D3_2_label"        =>  "2 LIGHT COMMERCIAL VEHICLES (<=3.5 tonnes)",
        "D3_2_label"        =>  "3 HEAVY COMMERCIAL VEHICLES ( > 3.5 tonnes)",
        
    );
    
    var $emptyExceptions = array ( 
    
        "1_title",              
        "1_label" ,         
        
        "1_1",              
        
        "1_1_1",                
        
        
        
        "1_1_2",                
        "1_1_2_a",          
    
        
        "1_1_3",                
        
        
            
        
        "2_label",          
        
            
    
        /**/
        
        "P2_1_title",        
        "P2_1_label",           
        
        "P2_1_1",           
        
        "P2_1_1_1",         
      
        
        "P2_1_1_2",         
        
      
        
        

        "P2_2_label",           
        


        /**/        
        
        "C_1_title",
        "C_1_label",
        
        "C_1_1",
        
        "C_1_1_1",

        
        "C_1_1_2",
        
        "C_1_1_2_a",

        
        "C_1_1_3",
        


        "C_1_2",

        "C_2_label",
        

        
        
        /**/
        "D_1_title",
        "D_1_label",

        "D_1_1",    
        "D_1_1_1",   


        "D_1_1_2",


        "D_1_1_3",  


        "D_1_2",    
        
        "D_1_2_1",  


        "D_1_2_2",  

        
        "D_1_2_3",  


        "D_1_2_4",

        

        
        "D_1_2_6",

        

        
        "D_1_2_7",


        "D_2_label",
        
        "D_2_1",
        
        "D_2_1_1",  

        
        "D_2_1_2",

        
        "D_2_2",
        
        "D_2_2_1",  

        
        "D_2_2_2",

        
        /**/
        "D2_1_title" ,
        "D2_1_label" ,
        "D2_1_1"     ,
        "D2_1_1_1"   ,

        "D2_1_1_2"   ,

        "D2_1_1_3"   ,

        "D2_1_2"     ,
        "D2_1_2_1"   ,

        "D2_1_2_2"   ,

        "D2_1_2_3"   ,

        "D2_2_label" ,
        "D2_2_1"     ,
        "D2_2_1_1"   ,

        "D2_2_1_2"   ,

        "D2_2_2"     ,
        "D2_2_2_1"   ,

        "D2_2_2_2"   ,

        
        /**/
        "D3_1_title",
        "D3_1_label",

        "D3_2_label",

        "D3_3_label",

    );
        



    var $warningMessage = "";
    var $tempBool = false;
    var $dataWarnings = array();
    var $goToPage = "";
    
    
    var $noteAndWarningMessagesArr = array(
        "1_1_NOTE"          =>  '<tr><td class="header" style="color:blue; text-align:centre;" colspan="2">Please note the sum in fields 1.1.1, 1.1.2 and 1.1.3 should be same</td></tr>',
        "1_1_ERROR"         =>  '<tr><td class="header" style="color:red; text-align:centre;" colspan="2">Sum in fields 1.1.1, 1.1.2 and 1.1.3 is not same </td></tr>',
        "P2_1_1_NOTE"       =>  '<tr><td class="header" style="color:blue; text-align:centre;" colspan="2">Please note the sum in fields 1.1.1, 1.1.2 should be same</td></tr>',
        "P2_1_1_ERROR"      =>  '<tr><td class="header" style="color:red; text-align:centre;" colspan="2">Sum in fields 1.1.1, 1.1.2 is not same </td></tr>',   
        "C_1_1_NOTE"        =>  '<tr><td class="header" style="color:blue; text-align:centre;" colspan="2">Please note the sum in fields 1.1.1, 1.1.2 and 1.1.3 should be same</td></tr>',
        "C_1_1_ERROR"       =>  '<tr><td class="header" style="color:red; text-align:centre;" colspan="2">Sum in fields 1.1.1, 1.1.2 and 1.1.3 is not same </td></tr>',
        "D_1_1_NOTE"        =>  '<tr><td class="header" style="color:blue; text-align:centre;" colspan="2">Please note the sum in fields 1.1.1, 1.1.2 and 1.1.3 should be same</td></tr>',
        "D_1_1_ERROR"       =>  '<tr><td class="header" style="color:red; text-align:centre;" colspan="2">Sum in fields 1.1.1, 1.1.2 and 1.1.3 is not same </td></tr>',
        "D_1_2_NOTE"        =>  '<tr><td class="header" style="color:blue; text-align:centre;" colspan="2">Please note the sum in fields 1.2.1, 1.2.2, 1.2.3, 1.2.4, 1.2.6 should be same</td></tr>',
        "D_1_2_ERROR"       =>  '<tr><td class="header" style="color:red; text-align:centre;" colspan="2">Sum in fields 1.2.1, 1.2.2, 1.2.3, 1.2.4, 1.2.6 is not same </td></tr>',
        "D_2_1_NOTE"        =>  '<tr><td class="header" style="color:blue; text-align:centre;" colspan="2">Please note the sum in fields 2.1.1, and 2.1.2 should be same</td></tr>',
        "D_2_1_ERROR"       =>  '<tr><td class="header" style="color:red; text-align:centre;" colspan="2">Sum in fields 2.1.1, and 2.1.2 is not same </td></tr>',
        "D_2_2_NOTE"        =>  '<tr><td class="header" style="color:blue; text-align:centre;" colspan="2">Please note the sum in fields 2.2.1 and 2.2.2 should be same</td></tr>',
        "D_2_2_ERROR"       =>  '<tr><td class="header" style="color:red; text-align:centre;" colspan="2">Sum in fields 2.2.1 and 2.2.2 is not same </td></tr>',
        "D2_1_1_NOTE"       =>  '<tr><td class="header" style="color:blue; text-align:centre;" colspan="2">Please note the sum in fields 1.1.1, 1.1.2 and 1.1.3 should be same</td></tr>',
        "D2_1_1_ERROR"      =>  '<tr><td class="header" style="color:red; text-align:centre;" colspan="2">Sum in fields 1.1.1, 1.1.2 and 1.1.3 is not same </td></tr>',
        "D2_1_2_NOTE"       =>  '<tr><td class="header" style="color:blue; text-align:centre;" colspan="2">Please note the sum in fields 1.2.1, 1.2.2, 1.2.3 should be same</td></tr>',
        "D2_1_2_ERROR"      =>  '<tr><td class="header" style="color:red; text-align:centre;" colspan="2">Sum in fields 1.2.1, 1.2.2, 1.2.3 is not same </td></tr>',
        "D2_2_1_NOTE"       =>  '<tr><td class="header" style="color:blue; text-align:centre;" colspan="2">Please note the sum in fields 2.1.1, and 2.1.2 should be same</td></tr>',
        "D2_2_1_ERROR"      =>  '<tr><td class="header" style="color:red; text-align:centre;" colspan="2">Sum in fields 2.1.1, and 2.1.2 is not same </td></tr>',
        "D2_2_2_NOTE"       =>  '<tr><td class="header" style="color:blue; text-align:centre;" colspan="2">Please note the sum in fields 2.2.1 and 2.2.2 should be same</td></tr>',
        "D2_2_2_ERROR"      =>  '<tr><td class="header" style="color:red; text-align:centre;" colspan="2">Sum in fields 2.2.1 and 2.2.2 is not same </td></tr>',

    );
    var $noteAndWarningMessagesOutputArr = array();
    
    var $radioBattonsWarningsArr = array();
    
    var $tmp = false;
    function parse(){
        if(($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['submit']))){
            if(isset($_POST['co_email'])){
                $this->userData["co_email"] = $this->value($_POST['co_email']);
                if(!$this->is_email($this->userData["co_email"])){
                    $this->setwarnings("co_email");
                }
            }
            if(isset($_POST['co_tel'])){
                $this->userData["co_tel"] = $this->value($_POST['co_tel']);
                if(empty($this->userData["co_tel"])){
                    $this->setwarnings("co_tel");
                }
            }
            if(isset($_POST['pe_pos'])){
                $this->userData["pe_pos"] = $this->value($_POST['pe_pos']);
                if(empty($this->userData["pe_pos"])){
                    $this->setwarnings("pe_pos");
                }
            }
            if(isset($_POST['pe_fio'])){
                $this->userData["pe_fio"] = $this->value($_POST['pe_fio']);
                if(empty($this->userData["pe_fio"])){
                    $this->setwarnings("pe_fio");
                }
            }
            if(isset($_POST['employees_num'])){
                $this->userData["employees_num"] = $this->value($_POST['employees_num']);
                if(empty($this->userData["employees_num"])){
                    $this->setwarnings("employees_num");
                }
            }
            if(isset($_POST['co_name'])){
                $this->userData["co_name"] = $this->value($_POST['co_name']);
                if(empty($this->userData["co_name"])){
                    $this->setwarnings("co_name");
                }
            }

            /* fill userData array from _POST and check on warnings */
            foreach($this->writeArray as $key => $value){
            
                if(array_key_exists($key, $this->writeArrayExceptions)){
                    continue;
                }

                if(isset($_POST[$key])){
                    $this->userData[$key] = $this->value($_POST[$key]);
                    
                    /* check on 'empty' warnings */
                    if(!strlen($this->userData[$key]) && !in_array($key, $this->emptyExceptions) ){
                        $this->setEmptyDataWarning($key);
                        continue;
                    }
                    
                    /*  check on 'non numeric' warnings */
                    if( !empty($this->userData[$key]) && !is_numeric($this->userData[$key]) ){
                        $this->setNotNumericDataWarning($key);
                        continue;
                    }   
                }
            }
            
            foreach($this->writeRadioArray as $key => $value){
                $this->checkAndSaveRadioValue($key);
            }
            
            $this->calcHiddenFields();
            $this->checkSumFields();
            
            
            /* check that all is ok and send email  */
            if((strlen($this->warningMessage)==0)&&(!empty($this->userData))&&(!$this->dataWarnings)){
                if($this->SendMail()){
                    $this->warningMessage = $this->L("send_success");
                    $this->userData = array();

                }else{
                    $this->warningMessage = $this->L("send_failed");
                }
            }
            
            /* if some field is incorrect, find first anchor */
            foreach($this->writeArray as $key => $value){
                if(array_key_exists($key, $this->dataWarnings)){
                    $this->goToPage = "$key";
                    if(strlen($this->warningMessage)==0){
                        $this->warningMessage = "See warnings below";
                        $this->tempBool = true;
                    }
                    $tmp = true;
                    break;
                }
            }
            if ($tmp == false){
                foreach($this->writeRadioArray as $key => $value){
                    if(array_key_exists($key, $this->dataWarnings)){
                        $this->goToPage = "$key";
                        if(strlen($this->warningMessage)==0){
                            $this->warningMessage = "See warnings below";
                            $this->tempBool = true;
                        }
                        break;
                    }
                }
            }

            
        }else{
            /*  prepare notes array for first run */
            $this->prepareOutpurArrForFirstRun();
        }
    }
    
    function value($text){
        if(!is_null($text)){
            return trim($text);
        }
        return null;
    }
    
    function is_email($email = ""){
        $p = '/^[a-z0-9!#$%&*+-=?^_`{|}~]+(\.[a-z0-9!#$%&*+-=?^_`{|}~]+)*';
        $p.= '@([-a-z0-9]+\.)+([a-z]{2,3}';
        $p.= '|info|arpa|aero|coop|name|museum|mobi)$/ix';
        return preg_match($p, $email);
    }
    
    function L($text = ""){
        if ( array_key_exists($text, $this->lang[$this->locale]) )
            return $this->lang[$this->locale][$text];
        return $text;
    }
    
    function LD($text = ""){
    if ( array_key_exists($text, $this->writeArray) )
        return $this->writeArray[$text];
    return $text;
    }
    
    function LeD($text = ""){
        echo $this->LD($text);
    }
    
    function Le($text = ""){
        echo $this->L($text);
    }

    function safeEcho($string){
        if(array_key_exists($string, $this->userData))
            echo htmlspecialchars((string)$this->userData[$string]);
    }
    
    function LDR($text = ""){
    if ( array_key_exists($text, $this->writeRadioArray) )
        return $this->writeRadioArray[$text];
    return $text;
    }
    function LeDR($text = ""){
        echo $this->LDR($text);
    }

    function rand(){
        echo "pf_".rand(1,99999);
    }
    function setwarnings($text){
        $this->warningMessage = $this->L("field")." \"".$this->L($text)."\" ".$this->L("mast");
    }

    function showwarnings(){
        if(strlen($this->warningMessage)>0){
            echo "<div class=\"warnings\">".$this->warningMessage."</div>";
        }
    }

    function goToWarningOnPage(){
        if($this->tempBool == true){
            foreach($this->dataWarnings as $key => $value){
                if($this->goToPage == "$key"){
                    return "an_"."$key";
                }
            }
        }
    }
    
    /* calculate hidden fields */
    function calcHiddenFields(){
        /* B */
        $this->userData["1_1_1"] = $this->userData["1_1_1_a"] +
                                   $this->userData["1_1_1_b"] +
                                   $this->userData["1_1_1_c"] +
                                   $this->userData["1_1_1_d"] +
                                   $this->userData["1_1_1_e"] +
                                   $this->userData["1_1_1_f"] +
                                   $this->userData["1_1_1_g"] +
                                   $this->userData["1_1_1_h"] +
                                   $this->userData["1_1_1_i"];
        $this->userData["1_1_1"] = round($this->userData["1_1_1"], 12);                           
                                   
        $this->userData["1_1_2_a"] = $this->userData["1_1_2_a1"] +
                                     $this->userData["1_1_2_a2"] +
                                     $this->userData["1_1_2_a3"];
        $this->userData["1_1_2_a"] = round($this->userData["1_1_2_a"], 12);   
        
        
        $this->userData["1_1_2"] = $this->userData["1_1_2_a"] +
                                   $this->userData["1_1_2_b"] +
                                   $this->userData["1_1_2_c"] +
                                   $this->userData["1_1_2_d"];   
        $this->userData["1_1_2"] = round($this->userData["1_1_2"], 12);  
                                   
        $this->userData["1_1_3"] = $this->userData["1_1_3_a"] +
                                   $this->userData["1_1_3_b"] +
                                   $this->userData["1_1_3_c"] +
                                   $this->userData["1_1_3_d"];
        $this->userData["1_1_3"] = round($this->userData["1_1_3"], 12);  
                                   
                                   
        $this->userData["1_1"]  = $this->userData["1_1_1"];                        
                                
        /* B2 */                
        $this->userData["P2_1_1_1"] = $this->userData["P2_1_1_1_a"] +
                                   $this->userData["P2_1_1_1_b"] +
                                   $this->userData["P2_1_1_1_c"] +
                                   $this->userData["P2_1_1_1_d"] +
                                   $this->userData["P2_1_1_1_e"] +
                                   $this->userData["P2_1_1_1_f"];
        $this->userData["P2_1_1_1"] = round($this->userData["P2_1_1_1"], 12);  
                                   
        $this->userData["P2_1_1_2"] = $this->userData["P2_1_1_2_a"] +
                                   $this->userData["P2_1_1_2_b"] +
                                   $this->userData["P2_1_1_2_c"] +
                                   $this->userData["P2_1_1_2_d"];
        $this->userData["P2_1_1_2"] = round($this->userData["P2_1_1_2"], 12);  
                                   
        $this->userData["P2_1_1"]   = $this->userData["P2_1_1_1"]; 
                                  
        /* C */                         
        $this->userData["C_1_1_1"] = $this->userData["C_1_1_1_a"] +
                                   $this->userData["C_1_1_1_b"] +
                                   $this->userData["C_1_1_1_c"] +
                                   $this->userData["C_1_1_1_d"] +
                                   $this->userData["C_1_1_1_e"] +
                                   $this->userData["C_1_1_1_f"] +
                                   $this->userData["C_1_1_1_g"] +
                                   $this->userData["C_1_1_1_h"] +
                                   $this->userData["C_1_1_1_i"] ;
        $this->userData["C_1_1_1"] = round($this->userData["C_1_1_1"], 12);  
                                   
                                   
        $this->userData["C_1_1_2_a"] = $this->userData["C_1_1_2_a1"] +
                                     $this->userData["C_1_1_2_a2"] +
                                     $this->userData["C_1_1_2_a3"];
        $this->userData["C_1_1_2_a"] = round($this->userData["C_1_1_2_a"], 12);  
                                     
        $this->userData["C_1_1_2"] = $this->userData["C_1_1_2_a"] +
                                   $this->userData["C_1_1_2_b"] +
                                   $this->userData["C_1_1_2_c"] +
                                   $this->userData["C_1_1_2_d"];   
        $this->userData["C_1_1_2"] = round($this->userData["C_1_1_2"], 12);  
                                   
        $this->userData["C_1_1_3"] = $this->userData["C_1_1_3_a"] +
                                   $this->userData["C_1_1_3_b"] +
                                   $this->userData["C_1_1_3_c"] +
                                   $this->userData["C_1_1_3_d"];
        $this->userData["C_1_1_3"] = round($this->userData["C_1_1_3"], 12);  
                                   
                                   
        $this->userData["C_1_1"]    = $this->userData["C_1_1_1"];                      

        /* D */                         
        $this->userData["D_1_1_1"] = $this->userData["D_1_1_1_a"] +
                                   $this->userData["D_1_1_1_b"] +
                                   $this->userData["D_1_1_1_c"];
        $this->userData["D_1_1_1"] = round($this->userData["D_1_1_1"], 12);  
                                   
        $this->userData["D_1_1_2"] = $this->userData["D_1_1_2_a"] +
                                   $this->userData["D_1_1_2_b"];
        $this->userData["D_1_1_2"] = round($this->userData["D_1_1_2"], 12);  
                                   
                                   
        $this->userData["D_1_1_3"] = $this->userData["D_1_1_3_a"] +
                                   $this->userData["D_1_1_3_b"];
        $this->userData["D_1_1_3"] = round($this->userData["D_1_1_3"], 12);  
                                   
        $this->userData["D_1_1"] = $this->userData["D_1_1_1"];

        $this->userData["D_1_2_1"] = $this->userData["D_1_2_1_a"] +
                                   $this->userData["D_1_2_1_b"] +
                                   $this->userData["D_1_2_1_c"];
        $this->userData["D_1_2_1"] = round($this->userData["D_1_2_1"], 12);  
                                   
        $this->userData["D_1_2_2"] = $this->userData["D_1_2_2_a"] +
                                   $this->userData["D_1_2_2_b"];
        $this->userData["D_1_2_2"] = round($this->userData["D_1_2_2"], 12);  
                                   
        $this->userData["D_1_2_3"] = $this->userData["D_1_2_3_a"] +
                                   $this->userData["D_1_2_3_b"];
        $this->userData["D_1_2_3"] = round($this->userData["D_1_2_3"], 12); 
                                   
        $this->userData["D_1_2_4"] = $this->userData["D_1_2_4_a"] +
                                   $this->userData["D_1_2_4_b"] +
                                   $this->userData["D_1_2_4_c"] +
                                   $this->userData["D_1_2_4_d"] +
                                   $this->userData["D_1_2_4_e"] +
                                   $this->userData["D_1_2_4_f"];
        $this->userData["D_1_2_4"] = round($this->userData["D_1_2_4"], 12); 
                                   
        $this->userData["D_1_2_6"] = $this->userData["D_1_2_6_a"] +
                                   $this->userData["D_1_2_6_b"];
        $this->userData["D_1_2_6"] = round($this->userData["D_1_2_6"], 12); 
                                   
        $this->userData["D_1_2"] = $this->userData["D_1_2_1"];
        
        $this->userData["D_2_1_1"] = $this->userData["D_2_1_1_a"] +
                                   $this->userData["D_2_1_1_b"] +
                                   $this->userData["D_2_1_1_c"];
        $this->userData["D_2_1_1"] = round($this->userData["D_2_1_1"], 12); 
                                   
                                   
        $this->userData["D_2_1_2"] = $this->userData["D_2_1_2_a"] +
                                   $this->userData["D_2_1_2_b"];
        $this->userData["D_2_1_2"] = round($this->userData["D_2_1_2"], 12); 
                                   
        $this->userData["D_2_1"] = $this->userData["D_2_1_1"];

        $this->userData["D_2_2_1"] = $this->userData["D_2_2_1_a"] +
                                   $this->userData["D_2_2_1_b"] +
                                   $this->userData["D_2_2_1_c"];
        $this->userData["D_2_2_1"] = round($this->userData["D_2_2_1"], 12); 
                                   
        $this->userData["D_2_2_2"] = $this->userData["D_2_2_2_a"] +
                                   $this->userData["D_2_2_2_b"];
        $this->userData["D_2_2_2"] = round($this->userData["D_2_2_2"], 12); 
                                   
        $this->userData["D_2_2"] = $this->userData["D_2_2_1"];

        
        /* D2 */                            
        $this->userData["D2_1_1_1"] = $this->userData["D2_1_1_1_a"] +
                                   $this->userData["D2_1_1_1_b"];
        $this->userData["D2_1_1_1"] = round($this->userData["D2_1_1_1"], 12); 
                                   
        $this->userData["D2_1_1_2"] = $this->userData["D2_1_1_2_a"] +
                                   $this->userData["D2_1_1_2_b"] +
                                   $this->userData["D2_1_1_2_c"];
        $this->userData["D2_1_1_2"] = round($this->userData["D2_1_1_2"], 12); 
                                   
        $this->userData["D2_1_1_3"] = $this->userData["D2_1_1_3_a"] +
                                   $this->userData["D2_1_1_3_b"];
        $this->userData["D2_1_1_3"] = round($this->userData["D2_1_1_3"], 12); 
                                   
        $this->userData["D2_1_1"] = $this->userData["D2_1_1_1"];
        
        $this->userData["D2_1_2_1"] = $this->userData["D2_1_2_1_a"] +
                                   $this->userData["D2_1_2_1_b"];
        $this->userData["D2_1_2_1"] = round($this->userData["D2_1_2_1"], 12); 
                                   
        $this->userData["D2_1_2_2"] = $this->userData["D2_1_2_2_a"] +
                                   $this->userData["D2_1_2_2_b"] +
                                   $this->userData["D2_1_2_2_c"];
        $this->userData["D2_1_2_2"] = round($this->userData["D2_1_2_2"], 12); 
                                   
        $this->userData["D2_1_2_3"] = $this->userData["D2_1_2_3_a"] +
                                   $this->userData["D2_1_2_3_b"];
        $this->userData["D2_1_2_3"] = round($this->userData["D2_1_2_3"], 12); 
                                   
        $this->userData["D2_1_2"] = $this->userData["D2_1_2_1"];
        
        $this->userData["D2_2_1_1"] = $this->userData["D2_2_1_1_a"] +
                                   $this->userData["D2_2_1_1_b"];
        $this->userData["D2_2_1_1"] = round($this->userData["D2_2_1_1"], 12); 
                                   
        $this->userData["D2_2_1_2"] = $this->userData["D2_2_1_2_a"] +
                                   $this->userData["D2_2_1_2_b"] +
                                   $this->userData["D2_2_1_2_c"];
        $this->userData["D2_2_1_2"] = round($this->userData["D2_2_1_2"], 12); 
                                   
        $this->userData["D2_2_1"] = $this->userData["D2_2_1_1"];

        $this->userData["D2_2_2_1"] = $this->userData["D2_2_2_1_a"] +
                                   $this->userData["D2_2_2_1_b"];
        $this->userData["D2_2_2_1"] = round($this->userData["D2_2_2_1"], 12); 
                                   
        $this->userData["D2_2_2_2"] = $this->userData["D2_2_2_2_a"] +
                                   $this->userData["D2_2_2_2_b"] +
                                   $this->userData["D2_2_2_2_c"];
        $this->userData["D2_2_2_2"] = round($this->userData["D2_2_2_2"], 12); 
                                   
        $this->userData["D2_2_2"] = $this->userData["D2_2_2_1"];
        
        
    }
    
    function checkSumFields(){
    
        /* B */
        if(($this->userData["1_1_1"] == $this->userData["1_1_2"]) && ($this->userData["1_1_2"] == $this->userData["1_1_3"] )){
        
        }else{
            $this->noteAndWarningMessagesOutputArr["1_1"] = $this->noteAndWarningMessagesArr["1_1_ERROR"];
            $this->dataWarnings["1_1_1"] = $this->userData["1_1_1"];
            $this->dataWarnings["1_1_2"] = $this->userData["1_1_2"];
            $this->dataWarnings["1_1_3"] = $this->userData["1_1_3"];
            $this->dataWarnings["1_1"] = "";
            
        }
        
        /* B2 */
        if($this->userData["P2_1_1_1"] == $this->userData["P2_1_1_2"]){
        
        }else{
            $this->noteAndWarningMessagesOutputArr["P2_1_1"] = $this->noteAndWarningMessagesArr["P2_1_1_ERROR"];
            $this->dataWarnings["P2_1_1_1"] = $this->userData["P2_1_1_1"];
            $this->dataWarnings["P2_1_1_2"] = $this->userData["P2_1_1_2"];
            $this->dataWarnings["P2_1_1"] = "";
            
        }
        
        /* C */
        if($this->userData["C_1_1_1"] == $this->userData["C_1_1_2"] && $this->userData["C_1_1_2"] == $this->userData["C_1_1_3"] ){
        
        }else{
            $this->noteAndWarningMessagesOutputArr["C_1_1"] = $this->noteAndWarningMessagesArr["C_1_1_ERROR"];
            $this->dataWarnings["C_1_1_1"] = $this->userData["C_1_1_1"];
            $this->dataWarnings["C_1_1_2"] = $this->userData["C_1_1_2"];
            $this->dataWarnings["C_1_1_3"] = $this->userData["C_1_1_3"];
            $this->dataWarnings["C_1_1"] = "";
        }
        
        /* D */
        if($this->userData["D_1_1_1"] == $this->userData["D_1_1_2"] && $this->userData["D_1_1_1"] == $this->userData["D_1_1_3"] ){
        
        }else{
            $this->noteAndWarningMessagesOutputArr["D_1_1"] = $this->noteAndWarningMessagesArr["D_1_1_ERROR"];
            $this->dataWarnings["D_1_1_1"] = $this->userData["D_1_1_1"];
            $this->dataWarnings["D_1_1_2"] = $this->userData["D_1_1_2"];
            $this->dataWarnings["D_1_1_3"] = $this->userData["D_1_1_3"];
            $this->dataWarnings["D_1_1"] = "";
        }

        if($this->userData["D_1_2_1"] == $this->userData["D_1_2_2"] && $this->userData["D_1_2_1"] == $this->userData["D_1_2_3"] &&
            $this->userData["D_1_2_1"] == $this->userData["D_1_2_4"] && $this->userData["D_1_2_1"] == $this->userData["D_1_2_6"]){
        
        }else{
            $this->noteAndWarningMessagesOutputArr["D_1_2"] = $this->noteAndWarningMessagesArr["D_1_2_ERROR"];
            $this->dataWarnings["D_1_2_1"] = $this->userData["D_1_2_1"];
            $this->dataWarnings["D_1_2_2"] = $this->userData["D_1_2_2"];
            $this->dataWarnings["D_1_2_3"] = $this->userData["D_1_2_3"];
            $this->dataWarnings["D_1_2_4"] = $this->userData["D_1_2_4"];
            $this->dataWarnings["D_1_2_6"] = $this->userData["D_1_2_6"];
            $this->dataWarnings["D_1_2"] = "";
        }
        
        if($this->userData["D_2_1_1"] == $this->userData["D_2_1_2"] ){
        
        }else{
            $this->noteAndWarningMessagesOutputArr["D_2_1"] = $this->noteAndWarningMessagesArr["D_2_1_ERROR"];
            $this->dataWarnings["D_2_1_1"] = $this->userData["D_2_1_1"];
            $this->dataWarnings["D_2_1_2"] = $this->userData["D_2_1_2"];
            $this->dataWarnings["D_2_1"] = "";
        }
        
        if($this->userData["D_2_2_1"] == $this->userData["D_2_2_2"] ){
        
        }else{
            $this->noteAndWarningMessagesOutputArr["D_2_2"] = $this->noteAndWarningMessagesArr["D_2_2_ERROR"];
            $this->dataWarnings["D_2_2_1"] = $this->userData["D_2_2_1"];
            $this->dataWarnings["D_2_2_2"] = $this->userData["D_2_2_2"];
            $this->dataWarnings["D_2_2"] = "";
        }
        
        
        /* D2 */
        if($this->userData["D2_1_1_1"] == $this->userData["D2_1_1_2"] && $this->userData["D2_1_1_1"] == $this->userData["D2_1_1_3"] ){
        
        }else{
            $this->noteAndWarningMessagesOutputArr["D2_1_1"] = $this->noteAndWarningMessagesArr["D2_1_1_ERROR"];
            $this->dataWarnings["D2_1_1_1"] = $this->userData["D2_1_1_1"];
            $this->dataWarnings["D2_1_1_2"] = $this->userData["D2_1_1_2"];
            $this->dataWarnings["D2_1_1_3"] = $this->userData["D2_1_1_3"];
            $this->dataWarnings["D2_1_1"] = "";
        }

        if($this->userData["D2_1_2_1"] == $this->userData["D2_1_2_2"] && $this->userData["D2_1_2_1"] == $this->userData["D2_1_2_3"] ){
        
        }else{
            $this->noteAndWarningMessagesOutputArr["D2_1_2"] = $this->noteAndWarningMessagesArr["D2_1_2_ERROR"];
            $this->dataWarnings["D2_1_2_1"] = $this->userData["D2_1_2_1"];
            $this->dataWarnings["D2_1_2_2"] = $this->userData["D2_1_2_2"];
            $this->dataWarnings["D2_1_2_3"] = $this->userData["D2_1_2_3"];
            $this->dataWarnings["D2_1_2"] = "";
        }
        
        if($this->userData["D2_2_1_1"] == $this->userData["D2_2_1_2"] ){
        
        }else{
            $this->noteAndWarningMessagesOutputArr["D2_2_1"] = $this->noteAndWarningMessagesArr["D2_2_1_ERROR"];
            $this->dataWarnings["D2_2_1_1"] = $this->userData["D2_2_1_1"];
            $this->dataWarnings["D2_2_1_2"] = $this->userData["D2_2_1_2"];
            $this->dataWarnings["D2_2_1"] = "";
        }
        
        if($this->userData["D2_2_2_1"] == $this->userData["D2_2_2_2"] ){
        
        }else{
            $this->noteAndWarningMessagesOutputArr["D2_2_2"] = $this->noteAndWarningMessagesArr["D2_2_2_ERROR"];
            $this->dataWarnings["D2_2_2_1"] = $this->userData["D2_2_2_1"];
            $this->dataWarnings["D2_2_2_2"] = $this->userData["D2_2_2_2"];
            $this->dataWarnings["D2_2_2"] = "";
        }

        
    }
    
    
    /* check input data  */
    function setEmptyDataWarning($key){
        $this->dataWarnings[$key] = "This field is required";
    }
    function setNotNumericDataWarning($key){
        $this->dataWarnings[$key] = "This field must be a number";
    }
    
    /* show data warning if needs for each data field */
    function showDataWarning($key){
        if(array_key_exists($key, $this->dataWarnings)){
            echo $this->dataWarnings[$key];
        }
    }
    
    /* these functions used for print notes and errors */
    function prepareOutpurArrForFirstRun(){
        $this->noteAndWarningMessagesOutputArr["1_1"] = $this->noteAndWarningMessagesArr["1_1_NOTE"];
        $this->noteAndWarningMessagesOutputArr["P2_1_1"] = $this->noteAndWarningMessagesArr["P2_1_1_NOTE"];
        $this->noteAndWarningMessagesOutputArr["C_1_1"] = $this->noteAndWarningMessagesArr["C_1_1_NOTE"];
        $this->noteAndWarningMessagesOutputArr["D_1_1"] = $this->noteAndWarningMessagesArr["D_1_1_NOTE"];
        $this->noteAndWarningMessagesOutputArr["D_1_2"] = $this->noteAndWarningMessagesArr["D_1_2_NOTE"];
        $this->noteAndWarningMessagesOutputArr["D_2_1"] = $this->noteAndWarningMessagesArr["D_2_1_NOTE"];
        $this->noteAndWarningMessagesOutputArr["D_2_2"] = $this->noteAndWarningMessagesArr["D_2_2_NOTE"];
        $this->noteAndWarningMessagesOutputArr["D2_1_1"] = $this->noteAndWarningMessagesArr["D2_1_1_NOTE"];
        $this->noteAndWarningMessagesOutputArr["D2_1_2"] = $this->noteAndWarningMessagesArr["D2_1_2_NOTE"];
        $this->noteAndWarningMessagesOutputArr["D2_2_1"] = $this->noteAndWarningMessagesArr["D2_2_1_NOTE"];
        $this->noteAndWarningMessagesOutputArr["D2_2_2"] = $this->noteAndWarningMessagesArr["D2_2_2_NOTE"];
        
    }
    function noteOrErrorsPrint($key){
        if(array_key_exists($key, $this->noteAndWarningMessagesOutputArr)){
            echo $this->noteAndWarningMessagesOutputArr[$key];
        }
    }
    
    /* check that radio was set and save to array, if not - set warning */
    function checkAndSaveRadioValue($key){
        if(isset($_POST[$key])){
            $this->userData[$key] = $this->value($_POST[$key]);
        }elseif(empty($this->userData[$key]) && !in_array($key, $this->emptyRadioExceptions)){
                $this->dataWarnings[$key] = "This field is required";
        }
    }
    
    function radioButtonSaveAndPrint($key){
        if(($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['submit']))){
            if($this->userData[$key] != 'Yes' && $this->userData[$key] != 'No'){
                echo '<input type="radio" name="'.$key.'"value="Yes"> <input type="radio" name="'.$key.'" value="No">';     
            }elseif($this->userData[$key] == 'Yes'){
                echo '<input type="radio" name="'.$key.'"value="Yes" checked="checked"> <input type="radio" name="'.$key.'" value="No">';   
            }elseif($this->userData[$key] == 'No'){
                echo '<input type="radio" name="'.$key.'"value="Yes"> <input type="radio" name="'.$key.'" value="No" checked="checked">';       
            }
        }else{
            echo '<input type="radio" name="'.$key.'"value="Yes"> <input type="radio" name="'.$key.'" value="No">';
        }
    }
    
    function SendMail(){
        $surveyBodyMail = "
        <html>
            <head>
                <title>uul.com.ua | ".$this->L("title")."</title>
            </head>
            <body bgcolor=\"#F5F5F5\" style=\"font-family:Verdana;font-size:14px;\">
                <p style=\"margin:8px;text-align:center;font-size:16px;\">".$this->L("title")."</p>
                <table border=\"0\" valign=\"top\" style=\"border:1px solid #333333;width:600px;\">
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->L("co")."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:40%;\" >".$this->L("co_name")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:60%;\" >".$this->userData["co_name"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:40%;\" >".$this->L("employees_num")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:60%;\" >".$this->userData["employees_num"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:40%;\" >".$this->L("pe_fio")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:60%;\" >".$this->userData["pe_fio"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:40%;\" >".$this->L("pe_pos")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:60%;\" >".$this->userData["pe_pos"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:40%;\" >".$this->L("co_tel")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:60%;\" >".$this->userData["co_tel"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:40%;\" >".$this->L("co_email")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:60%;\" >".$this->userData["co_email"]."</td>
                    </tr>
                </table>
                
                <p>&nbsp;</p>
                
                <table border=\"0\" valign=\"top\" style=\"border:1px solid #333333;width:600px;\">
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("1_title")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("1_label")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_1_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_1_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_1_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_1_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_1_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_1_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_1_d")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_1_d"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_1_e")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_1_e"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_1_f")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_1_f"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_1_g")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_1_g"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_1_h")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_1_h"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_1_i")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_1_i"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_2_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_2_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_2_a1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_2_a1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_2_a2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_2_a2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_2_a3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_2_a3"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_2_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_2_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_2_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_2_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_2_d")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_2_d"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_3"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_3_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_3_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_3_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_3_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_3_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_3_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_1_3_d")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_1_3_d"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["1_2"]."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("2_label")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("2_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["2_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("2_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["2_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("2_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["2_3"]."</td>
                    </tr>
                    
                    
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("P2_1_title")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("P2_1_label")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_1_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_1_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_1_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_1_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_1_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_1_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_1_d")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_1_d"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_1_e")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_1_e"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_1_f")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_1_f"]."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_2_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_2_a"]."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_2_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_2_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_2_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_2_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_1_2_d")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_1_2_d"]."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_1_2"]."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("P2_2_label")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_2_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_2_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_2_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_2_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("P2_2_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["P2_2_3"]."</td>
                    </tr>
                            
                            
                            
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("C_1_title")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("C_1_label")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_1_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_1_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_1_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_1_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_1_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_1_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_1_d")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_1_d"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_1_e")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_1_e"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_1_f")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_1_f"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_1_g")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_1_g"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_1_h")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_1_h"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_1_i")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_1_i"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_2_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_2_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_2_a1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_2_a1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_2_a2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_2_a2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_2_a3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_2_a3"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_2_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_2_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_2_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_2_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_2_d")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_2_d"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_3"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_3_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_3_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_3_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_3_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_3_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_3_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_1_3_d")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_1_3_d"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_1_2"]."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("C_2_label")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_2_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_2_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_2_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_2_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("C_2_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["C_2_3"]."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("D_1_title")."</td>
                    </tr>
                                        
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("D_1_label")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_1_1_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_1_1_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_1_1_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_1_1_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_1_1_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_1_1_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_1_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_1_2_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_1_2_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_1_2_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_1_2_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_1_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_1_3"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_1_3_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_1_3_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_1_3_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_1_3_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_1_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_1_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_1_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_1_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_1_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_1_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_2_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_2_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_2_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_2_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_3"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_3_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_3_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_3_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_3_b"]."</td>
                    </tr>                   
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_4")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_4"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_4_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_4_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_4_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_4_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_4_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_4_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_4_d")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_4_d"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_4_e")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_4_e"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_4_f")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_4_f"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_5")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_5"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_6")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_6"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_6_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_6_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_6_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_6_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_6_z")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_6_z"]."</td>
                    </tr>
                   <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_7")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_7"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_7_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_7_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_7_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_7_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_7_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_7_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_7_d")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_7_d"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_1_2_7_e")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_1_2_7_e"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("D_2_label")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_1_1_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_1_1_a"]."</td>
                    </tr>
                   <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_1_1_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_1_1_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_1_1_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_1_1_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_1_2"]."</td>
                    </tr>
                   <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_1_2_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_1_2_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_1_2_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_1_2_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_2"]."</td>
                    </tr>
                   <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_2_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_2_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_2_1_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_2_1_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_2_1_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_2_1_b"]."</td>
                    </tr>
                   <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_2_1_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_2_1_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_2_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_2_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_2_2_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_2_2_a"]."</td>
                    </tr>
                   <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D_2_2_2_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D_2_2_2_b"]."</td>
                    </tr>
                    
                    
                    
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("D2_1_title")."</td>
                    </tr>
                    
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("D2_1_label")."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_1_1_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_1_1_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_1_1_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_1_1_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_1_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_1_2_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_1_2_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_1_2_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_1_2_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_1_2_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_1_2_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_1_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_1_3"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_1_3_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_1_3_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_1_3_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_1_3_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_2_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_2_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_2_1_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_2_1_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_2_1_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_2_1_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_2_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_2_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_2_2_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_2_2_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_2_2_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_2_2_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_2_2_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_2_2_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_2_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_2_3"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_2_3_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_2_3_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_1_2_3_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_1_2_3_b"]."</td>
                    </tr>                           
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("D2_2_label")."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_1_1_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_1_1_a"]."</td>
                    </tr>
                   <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_1_1_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_1_1_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_1_2"]."</td>
                    </tr>
                   <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_1_2_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_1_2_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_1_2_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_1_2_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_1_2_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_1_2_c"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_2"]."</td>
                    </tr>
                   <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_2_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_2_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_2_1_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_2_1_a"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_2_1_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_2_1_b"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_2_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_2_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_2_2_a")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_2_2_a"]."</td>
                    </tr>
                   <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_2_2_b")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_2_2_b"]."</td>
                    </tr>
                   <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D2_2_2_2_c")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D2_2_2_2_c"]."</td>
                    </tr>

                    
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("D3_1_title")."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("D3_1_label")."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_1_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_1_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_1_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_1_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_1_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_1_3"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_1_4")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_1_4"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_1_5")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_1_5"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_1_6")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_1_6"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_1_7")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_1_7"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("D3_2_label")."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_2_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_2_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_2_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_2_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_2_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_2_3"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_2_4")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_2_4"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_2_5")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_2_5"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_2_6")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_2_6"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td colspan=\"2\" valign=\"top\" bgcolor=\"#EBEDAA\" style=\"border:1px solid #333333;padding:4px;text-align:center;font-size:16px;\">".$this->LD("D3_3_label")."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_3_1")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_3_1"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_3_2")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_3_2"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_3_3")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_3_3"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_3_4")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_3_4"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_3_5")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_3_5"]."</td>
                    </tr>
                    <tr valign=\"top\" >
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:80%;\" >".$this->LD("D3_3_6")."</td>
                        <td valign=\"top\" bgcolor=\"#E4E3CA\" style=\"border:1px solid #333333;padding:4px;width:20%;\" >".$this->userData["D3_3_6"]."</td>
                    </tr>
                    
                    
                </table>
                
            </body>
        </html>";
        $headers = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= sprintf("From: %s\r\n", $this->surveyFromMail);
        return mail( $this->surveyToMail, "survey", $surveyBodyMail, $headers );
    }
}

$form = new survey();
$form->parse();



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<!--[if IE]>
    <xml:namespace ns="urn:schemas-microsoft-com:vml" prefix="v" />
<![endif]-->
<head>
    <title><?php $form->Le("title"); ?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script language="JavaScript" type="text/javascript" src="calc.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    


    
    
    
<!--[if IE]>
<style type="text/css">
    v\:roundrect  {
        behavior:url(#default#VML);
    }
    v\:fill  {
        behavior:url(#default#VML);
    }
    .shadow {
        width: 900px;
        height: 100%;
        padding: 8px;
        display: block;
        margin: -8px auto;
    }
</style>
<![endif]-->

</head>

<body>


<!--[if IE]>
<v:roundrect stroked="false" class="shadow" arcsize="0.09">
    <v:fill type="gradientradial" focusposition=".1,.1" focussize=".79,.79" color="#DFEAEB" color2="#000000" opacity=".9" opacity2=".0">
<![endif]-->
    <div class="pf-wrapper">
        <div class="pf-header">
            <?php $form->Le("form_title"); ?>
            <p>&nbsp;</p>
            <?php /* <p class="small"><?php $form->Le("form_warning"); ?></p> */ ?>
        </div>
        
        

        <?php $form->showwarnings();?>
        

        <script language="javascript" type="text/javascript">location.hash='<?php echo $form->goToWarningOnPage();?>'</script> 


        
        <form name="survey" action="<?php echo $form->pageName;?>" method="post">
            <table border="0" cellpadding="3" cellspacing="1">
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            
            
            <!--   Company section      -->
            <tr>
                <td class="header" style="color:black; background-color:#DBDBDB;" colspan="2"><?php $form->Le("co"); ?></td>
            </tr>
            <tr>
                <td width="50%"><?php $form->Le("co_name"); ?>:</td>
                <td width="50%" align="center"><input type="text" name="co_name" value="<?php $form->safeEcho("co_name"); ?>" size="30" maxlength="100"></td>
            </tr>
            <tr>
                <td width="50%"><?php $form->Le("employees_num"); ?>:</td>
                <td width="50%" align="center"><input type="text" name="employees_num" value="<?php $form->safeEcho("employees_num"); ?>" size="30" maxlength="100"></td>
            </tr>
            <tr>
                <td><?php $form->Le("pe_fio"); ?>:</td>
                <td><input type="text" name="pe_fio" value="<?php $form->safeEcho("pe_fio"); ?>" size="30" maxlength="100"></td>
            </tr>
            <tr>
                <td><?php $form->Le("pe_pos"); ?>:</td>
                <td><input type="text" name="pe_pos" value="<?php $form->safeEcho("pe_pos"); ?>" size="30" maxlength="100"></td>
            </tr>
            <tr>
                <td><?php $form->Le("co_tel"); ?>:</td>
                <td><input type="text" name="co_tel" value="<?php $form->safeEcho("co_tel"); ?>" size="30" maxlength="100"></td>
            </tr>
            <tr>
                <td><?php $form->Le("co_email"); ?>:</td>
                <td><input type="text" name="co_email" value="<?php $form->safeEcho("co_email"); ?>" size="30" maxlength="100"></td>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            
            
            <!--   Part I. EQUIPMENT section     -->
            <tr>
                <td class="header" style="color:black; background-color:#DBDBDB;" colspan="2"><?php $form->LeD("1_title");?></td>
            </tr>
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("1_label"); ?></td>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("1_1"); ?>:</td>
                    <td class="info1"> <a name="an_1_1"></a></td>
                </tr>
                <tr>
                    <td class="l1"></td>
                </tr>
            </tr>
            <?php $form->noteOrErrorsPrint("1_1"); ?>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("1_1_1"); ?>:</td>
                    <td class="warn2"><a name="an_1_1_1"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="1_1_1" value="<?php $form->showDataWarning("1_1_1");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_1_a"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_1_a"><?php $form->showDataWarning("1_1_1_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_1_a" value="<?php $form->safeEcho("1_1_1_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_1_b"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_1_b"><?php $form->showDataWarning("1_1_1_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="1_1_1_b" value="<?php $form->safeEcho("1_1_1_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_1_c"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_1_c"><?php $form->showDataWarning("1_1_1_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="1_1_1_c" value="<?php $form->safeEcho("1_1_1_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_1_d"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_1_d"><?php $form->showDataWarning("1_1_1_d");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_1_d" value="<?php $form->safeEcho("1_1_1_d"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>   
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_1_e"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_1_e"><?php $form->showDataWarning("1_1_1_e");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_1_e" value="<?php $form->safeEcho("1_1_1_e"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_1_f"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_1_f"><?php $form->showDataWarning("1_1_1_f");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="1_1_1_f" value="<?php $form->safeEcho("1_1_1_f"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_1_g"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_1_g"><?php $form->showDataWarning("1_1_1_g");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_1_g" value="<?php $form->safeEcho("1_1_1_g"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>   
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_1_h"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_1_h"><?php $form->showDataWarning("1_1_1_h");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_1_h" value="<?php $form->safeEcho("1_1_1_h"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_1_i"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_1_i"><?php $form->showDataWarning("1_1_1_i");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_1_i" value="<?php $form->safeEcho("1_1_1_i"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <!--   Part I. EQUIPMENT    SECTION   start 1_1_2        -->
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("1_1_2"); ?>:</td>
                    <td class="warn2"><a name="an_1_1_2"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="1_1_2" value="<?php $form->showDataWarning("1_1_2");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_2_a"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_2_a"></a></td>
                </tr>
                <tr>
                    <td class="l3"></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q4" rowspan="2"><?php $form->LeD("1_1_2_a1"); ?>:</td>
                    <td class="warn4"><a name="an_1_1_2_a1"><?php $form->showDataWarning("1_1_2_a1");?></a></td>
                </tr>
                <tr>
                    <td class="l4"><input type="text" name="1_1_2_a1" value="<?php $form->safeEcho("1_1_2_a1"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q4" rowspan="2"><?php $form->LeD("1_1_2_a2"); ?>:</td>
                    <td class="warn4"><a name="an_1_1_2_a2"><?php $form->showDataWarning("1_1_2_a2");?></a></td>
                </tr>
                <tr>
                    <td class="l4"><input type="text" name="1_1_2_a2" value="<?php $form->safeEcho("1_1_2_a2"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q4" rowspan="2"><?php $form->LeD("1_1_2_a3"); ?>:</td>
                    <td class="warn4"><a name="an_1_1_2_a3"><?php $form->showDataWarning("1_1_2_a3");?></a></td>
                </tr>
                <tr>
                    <td class="l4"><input type="text" name="1_1_2_a3" value="<?php $form->safeEcho("1_1_2_a3"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_2_b"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_2_b"><?php $form->showDataWarning("1_1_2_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_2_b" value="<?php $form->safeEcho("1_1_2_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_2_c"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_2_c"><?php $form->showDataWarning("1_1_2_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_2_c" value="<?php $form->safeEcho("1_1_2_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_2_d"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_2_d"><?php $form->showDataWarning("1_1_2_d");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_2_d" value="<?php $form->safeEcho("1_1_2_d"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("1_1_3"); ?>:</td>
                    <td class="warn2"><a name="an_1_1_3"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="1_1_3" value="<?php $form->showDataWarning("1_1_3");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_3_a"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_3_a"><?php $form->showDataWarning("1_1_3_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_3_a" value="<?php $form->safeEcho("1_1_3_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_3_b"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_3_b"><?php $form->showDataWarning("1_1_3_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_3_b" value="<?php $form->safeEcho("1_1_3_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_3_c"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_3_c"><?php $form->showDataWarning("1_1_3_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_3_c" value="<?php $form->safeEcho("1_1_3_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("1_1_3_d"); ?>:</td>
                    <td class="warn3"><a name="an_1_1_3_d"><?php $form->showDataWarning("1_1_3_d");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="1_1_3_d" value="<?php $form->safeEcho("1_1_3_d"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q1"  rowspan="2"><?php $form->LeD("1_2"); ?>:</td>
                    <td class="warn1"><a name="an_1_2"><?php $form->showDataWarning("1_2");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="1_2" value="<?php $form->safeEcho("1_2"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            

            
            <!--  2 label  -->
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("2_label"); ?></td>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("2_1"); ?>:</td>
                    <td class="warn1"><a name="an_2_1"><?php $form->showDataWarning("2_1");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="2_1" value="<?php $form->safeEcho("2_1"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("2_2"); ?>:</td>
                    <td class="warn1"><a name="an_2_2"><?php $form->showDataWarning("2_2");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="2_2" value="<?php $form->safeEcho("2_2"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("2_3"); ?>:</td>
                    <td class="warn1"><a name="an_2_3"><?php $form->showDataWarning("2_3");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="2_3" value="<?php $form->safeEcho("2_3"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <!--   END     Part I. EQUIPMENT    SECTION           -->
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            
            <!--  Part II. REAL ESTATE -->
            <tr>
                <td class="header" style="color:black; background-color:#DBDBDB;" colspan="2"><?php $form->LeD("P2_1_title");?></td>
            </tr>
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("P2_1_label"); ?></td>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("P2_1_1"); ?>:</td>
                    <td class="warn1"> <a name="an_P2_1_1"></a></td>
                </tr>
                <tr>
                    <td class="l1"></td>
                </tr>
            </tr>
            <?php $form->noteOrErrorsPrint("P2_1_1"); ?>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("P2_1_1_1"); ?>:</td>
                    <td class="warn2"><a name="an_P2_1_1_1"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="P2_1_1_1" value="<?php $form->showDataWarning("P2_1_1_1");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("P2_1_1_1_a"); ?>:</td>
                    <td class="warn3"><a name="an_P2_1_1_1_a"><?php $form->showDataWarning("P2_1_1_1_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="P2_1_1_1_a" value="<?php $form->safeEcho("P2_1_1_1_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("P2_1_1_1_b"); ?>:</td>
                    <td class="warn3"><a name="an_P2_1_1_1_b"><?php $form->showDataWarning("P2_1_1_1_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="P2_1_1_1_b" value="<?php $form->safeEcho("P2_1_1_1_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("P2_1_1_1_c"); ?>:</td>
                    <td class="warn3"><a name="an_P2_1_1_1_c"><?php $form->showDataWarning("P2_1_1_1_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="P2_1_1_1_c" value="<?php $form->safeEcho("P2_1_1_1_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("P2_1_1_1_d"); ?>:</td>
                    <td class="warn3"><a name="an_P2_1_1_1_d"><?php $form->showDataWarning("P2_1_1_1_d");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="P2_1_1_1_d" value="<?php $form->safeEcho("P2_1_1_1_d"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>   
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("P2_1_1_1_e"); ?>:</td>
                    <td class="warn3"><a name="an_P2_1_1_1_e"><?php $form->showDataWarning("P2_1_1_1_e");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="P2_1_1_1_e" value="<?php $form->safeEcho("P2_1_1_1_e"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("P2_1_1_1_f"); ?>:</td>
                    <td class="warn3"><a name="an_P2_1_1_1_f"><?php $form->showDataWarning("P2_1_1_1_f");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="P2_1_1_1_f" value="<?php $form->safeEcho("P2_1_1_1_f"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("P2_1_1_2"); ?>:</td>
                    <td class="warn2"><a name="an_P2_1_1_2"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="P2_1_1_2" value="<?php $form->showDataWarning("P2_1_1_2");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("P2_1_1_2_a"); ?>:</td>
                    <td class="warn3"><a name="an_P2_1_1_2_a"><?php $form->showDataWarning("P2_1_1_2_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="P2_1_1_2_a" value="<?php $form->safeEcho("P2_1_1_2_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("P2_1_1_2_b"); ?>:</td>
                    <td class="warn3"><a name="an_P2_1_1_2_b"><?php $form->showDataWarning("P2_1_1_2_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="P2_1_1_2_b" value="<?php $form->safeEcho("P2_1_1_2_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("P2_1_1_2_c"); ?>:</td>
                    <td class="warn3"><a name="an_P2_1_1_2_c"><?php $form->showDataWarning("P2_1_1_2_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="P2_1_1_2_c" value="<?php $form->safeEcho("P2_1_1_2_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("P2_1_1_2_d"); ?>:</td>
                    <td class="warn3"><a name="an_P2_1_1_2_d"><?php $form->showDataWarning("P2_1_1_2_d");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="P2_1_1_2_d" value="<?php $form->safeEcho("P2_1_1_2_d"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q1"  rowspan="2"><?php $form->LeD("P2_1_2"); ?>:</td>
                    <td class="warn1"><a name="an_P2_1_2"><?php $form->showDataWarning("P2_1_2");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="P2_1_2" value="<?php $form->safeEcho("P2_1_2"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <!--  2 label  -->
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("P2_2_label"); ?></td>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("P2_2_1"); ?>:</td>
                    <td class="warn1"><a name="an_P2_2_1"><?php $form->showDataWarning("P2_2_1");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="P2_2_1" value="<?php $form->safeEcho("P2_2_1"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("P2_2_2"); ?>:</td>
                    <td class="warn1"><a name="an_P2_2_2"><?php $form->showDataWarning("P2_2_2");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="P2_2_2" value="<?php $form->safeEcho("P2_2_2"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("P2_2_3"); ?>:</td>
                    <td class="warn1"><a name="an_P2_2_3"><?php $form->showDataWarning("P2_2_3");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="P2_2_3" value="<?php $form->safeEcho("P2_2_3"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <!--   END     Part II. REAL ESTATE           -->
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            
            <!--   C. HIRE PURCHASE HIRE PURCHASE of EQUIPMENT (incl. vehicles)     -->
            <tr>
                <td class="header" style="color:black; background-color:#DBDBDB;" colspan="2"><?php $form->LeD("C_1_title");?></td>
            </tr>
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("C_1_label"); ?></td>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("C_1_1"); ?>:</td>
                    <td class="info1"> <a name="an_C_1_1"></a></td>
                </tr>
                <tr>
                    <td class="l1"></td>
                </tr>
            </tr>
            <?php $form->noteOrErrorsPrint("C_1_1"); ?>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("C_1_1_1"); ?>:</td>
                    <td class="warn2"><a name="an_C_1_1_1"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="C_1_1_1" value="<?php $form->showDataWarning("C_1_1_1");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_1_a"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_1_a"><?php $form->showDataWarning("C_1_1_1_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_1_a" value="<?php $form->safeEcho("C_1_1_1_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_1_b"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_1_b"><?php $form->showDataWarning("C_1_1_1_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="C_1_1_1_b" value="<?php $form->safeEcho("C_1_1_1_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_1_c"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_1_c"><?php $form->showDataWarning("C_1_1_1_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="C_1_1_1_c" value="<?php $form->safeEcho("C_1_1_1_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_1_d"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_1_d"><?php $form->showDataWarning("C_1_1_1_d");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_1_d" value="<?php $form->safeEcho("C_1_1_1_d"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>   
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_1_e"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_1_e"><?php $form->showDataWarning("C_1_1_1_e");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_1_e" value="<?php $form->safeEcho("C_1_1_1_e"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_1_f"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_1_f"><?php $form->showDataWarning("C_1_1_1_f");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_1_f" value="<?php $form->safeEcho("C_1_1_1_f"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_1_g"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_1_g"><?php $form->showDataWarning("C_1_1_1_g");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_1_g" value="<?php $form->safeEcho("C_1_1_1_g"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_1_h"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_1_h"><?php $form->showDataWarning("C_1_1_1_h");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_1_h" value="<?php $form->safeEcho("C_1_1_1_h"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_1_i"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_1_i"><?php $form->showDataWarning("C_1_1_1_i");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_1_i" value="<?php $form->safeEcho("C_1_1_1_i"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("C_1_1_2"); ?>:</td>
                    <td class="warn2"><a name="an_C_1_1_2"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="C_1_1_2" value="<?php $form->showDataWarning("C_1_1_2");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_2_a"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_2_a"></a></td>
                </tr>
                <tr>
                    <td class="l3"></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q4" rowspan="2"><?php $form->LeD("C_1_1_2_a1"); ?>:</td>
                    <td class="warn4"><a name="an_C_1_1_2_a1"><?php $form->showDataWarning("C_1_1_2_a1");?></a></td>
                </tr>
                <tr>
                    <td class="l4"><input type="text" name="C_1_1_2_a1" value="<?php $form->safeEcho("C_1_1_2_a1"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q4" rowspan="2"><?php $form->LeD("C_1_1_2_a2"); ?>:</td>
                    <td class="warn4"><a name="an_C_1_1_2_a2"><?php $form->showDataWarning("C_1_1_2_a2");?></a></td>
                </tr>
                <tr>
                    <td class="l4"><input type="text" name="C_1_1_2_a2" value="<?php $form->safeEcho("C_1_1_2_a2"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q4" rowspan="2"><?php $form->LeD("C_1_1_2_a3"); ?>:</td>
                    <td class="warn4"><a name="an_C_1_1_2_a3"><?php $form->showDataWarning("C_1_1_2_a3");?></a></td>
                </tr>
                <tr>
                    <td class="l4"><input type="text" name="C_1_1_2_a3" value="<?php $form->safeEcho("C_1_1_2_a3"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_2_b"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_2_b"><?php $form->showDataWarning("C_1_1_2_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_2_b" value="<?php $form->safeEcho("C_1_1_2_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_2_c"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_2_c"><?php $form->showDataWarning("C_1_1_2_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_2_c" value="<?php $form->safeEcho("C_1_1_2_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_2_d"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_2_d"><?php $form->showDataWarning("C_1_1_2_d");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_2_d" value="<?php $form->safeEcho("C_1_1_2_d"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("C_1_1_3"); ?>:</td>
                    <td class="warn2"><a name="an_C_1_1_3"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="C_1_1_3" value="<?php $form->showDataWarning("C_1_1_3");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_3_a"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_3_a"><?php $form->showDataWarning("C_1_1_3_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_3_a" value="<?php $form->safeEcho("C_1_1_3_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_3_b"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_3_b"><?php $form->showDataWarning("C_1_1_3_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_3_b" value="<?php $form->safeEcho("C_1_1_3_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_3_c"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_3_c"><?php $form->showDataWarning("C_1_1_3_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_3_c" value="<?php $form->safeEcho("C_1_1_3_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("C_1_1_3_d"); ?>:</td>
                    <td class="warn3"><a name="an_C_1_1_3_d"><?php $form->showDataWarning("C_1_1_3_d");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="C_1_1_3_d" value="<?php $form->safeEcho("C_1_1_3_d"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("C_1_2"); ?>:</td>
                    <td class="warn1"><a name="an_C_1_2"><?php $form->showDataWarning("C_1_2");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="C_1_2" value="<?php $form->safeEcho("C_1_2"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("C_2_label"); ?></td>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("C_2_1"); ?>:</td>
                    <td class="warn1"><a name="an_C_2_1"><?php $form->showDataWarning("C_2_1");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="C_2_1" value="<?php $form->safeEcho("C_2_1"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("C_2_2"); ?>:</td>
                    <td class="warn1"><a name="an_C_2_2"><?php $form->showDataWarning("C_2_2");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="C_2_2" value="<?php $form->safeEcho("C_2_2"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("C_2_3"); ?>:</td>
                    <td class="warn1"><a name="an_C_2_3"><?php $form->showDataWarning("C_2_3");?></a></td>
                </tr>
                <tr>
                    <td class="l1"><input type="text" name="C_2_3" value="<?php $form->safeEcho("C_2_3"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <!--END   C. HIRE PURCHASE HIRE PURCHASE of EQUIPMENT (incl. vehicles)     -->
            
            
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>

            <!--  D.  AUTOMOTIVE DETAIL Part I. PASSENGER CAR FIGURES -->

            <tr>
                <td class="header" style="color:black; background-color:#DBDBDB;" colspan="2"><?php $form->LeD("D_1_title");?></td>
            </tr>
            
            
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("D_1_label"); ?></td>
            </tr>
            
            
            
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("D_1_1"); ?>:</td>
                    <td class="warn1"> <a name="an_D_1_1"></a></td>
                </tr>
                <tr>
                    <td class="l1"></td>
                </tr>
            </tr>
            
            
            <?php $form->noteOrErrorsPrint("D_1_1"); ?>
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_1_1_1"); ?>:</td>
                    <td class="warn2"><a name="an_D_1_1_1"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_1_1_1" value="<?php $form->showDataWarning("D_1_1_1");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_1_1_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_1_1_a"><?php $form->showDataWarning("D_1_1_1_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_1_1_a" value="<?php $form->safeEcho("D_1_1_1_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_1_1_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_1_1_b"><?php $form->showDataWarning("D_1_1_1_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D_1_1_1_b" value="<?php $form->safeEcho("D_1_1_1_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_1_1_c"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_1_1_c"><?php $form->showDataWarning("D_1_1_1_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D_1_1_1_c" value="<?php $form->safeEcho("D_1_1_1_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_1_1_2"); ?>:</td>
                    <td class="warn2"><a name="an_D_1_1_2"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_1_1_2" value="<?php $form->showDataWarning("D_1_1_2");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_1_2_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_1_2_a"><?php $form->showDataWarning("D_1_1_2_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_1_2_a" value="<?php $form->safeEcho("D_1_1_2_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_1_2_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_1_2_b"><?php $form->showDataWarning("D_1_1_2_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_1_2_b" value="<?php $form->safeEcho("D_1_1_2_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_1_1_3"); ?>:</td>
                    <td class="warn2"><a name="an_D_1_1_3"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_1_1_3" value="<?php $form->showDataWarning("D_1_1_3");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_1_3_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_1_3_a"><?php $form->showDataWarning("D_1_1_3_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_1_3_a" value="<?php $form->safeEcho("D_1_1_3_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_1_3_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_1_3_b"><?php $form->showDataWarning("D_1_1_3_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_1_3_b" value="<?php $form->safeEcho("D_1_1_3_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q1"><?php $form->LeD("D_1_2"); ?>:</td>
                    <td class="warn1"> <a name="an_D_1_2"></a></td>
                </tr>
                <tr>
                    <td class="warn1" style="color:red"><a name="an_1_2">Please note!!! <br>TOTAL NUMBER of New Contracts = TOTAL NUMBER of <br>Passenger Cars granted in the Year</a></td>
                    <td class="l1"></td>
                </tr>
            </tr>
            
            
            <?php $form->noteOrErrorsPrint("D_1_2"); ?>
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_1_2_1"); ?>:</td>
                    <td class="warn2"><a name="an_D_1_2_1"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_1_2_1" value="<?php $form->showDataWarning("D_1_2_1");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_1_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_1_a"><?php $form->showDataWarning("D_1_2_1_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_1_a" value="<?php $form->safeEcho("D_1_2_1_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_1_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_1_b"><?php $form->showDataWarning("D_1_2_1_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D_1_2_1_b" value="<?php $form->safeEcho("D_1_2_1_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_1_c"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_1_c"><?php $form->showDataWarning("D_1_2_1_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D_1_2_1_c" value="<?php $form->safeEcho("D_1_2_1_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_1_2_2"); ?>:</td>
                    <td class="warn2"><a name="an_D_1_2_2"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_1_2_2" value="<?php $form->showDataWarning("D_1_2_2");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_2_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_2_a"><?php $form->showDataWarning("D_1_2_2_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_2_a" value="<?php $form->safeEcho("D_1_2_2_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_2_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_2_b"><?php $form->showDataWarning("D_1_2_2_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_2_b" value="<?php $form->safeEcho("D_1_2_2_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_1_2_3"); ?>:</td>
                    <td class="warn2"><a name="an_D_1_2_3"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_1_2_3" value="<?php $form->showDataWarning("D_1_2_3");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_3_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_3_a"><?php $form->showDataWarning("D_1_2_3_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_3_a" value="<?php $form->safeEcho("D_1_2_3_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_3_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_3_b"><?php $form->showDataWarning("D_1_2_3_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_3_b" value="<?php $form->safeEcho("D_1_2_3_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_1_2_4"); ?>:</td>
                    <td class="warn2"><a name="an_D_1_2_4"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_1_2_4" value="<?php $form->showDataWarning("D_1_2_4");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_4_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_4_a"><?php $form->showDataWarning("D_1_2_4_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_4_a" value="<?php $form->safeEcho("D_1_2_4_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_4_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_4_b"><?php $form->showDataWarning("D_1_2_4_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_4_b" value="<?php $form->safeEcho("D_1_2_4_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_4_c"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_4_c"><?php $form->showDataWarning("D_1_2_4_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_4_c" value="<?php $form->safeEcho("D_1_2_4_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_4_d"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_4_d"><?php $form->showDataWarning("D_1_2_4_d");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_4_d" value="<?php $form->safeEcho("D_1_2_4_d"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_4_e"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_4_e"><?php $form->showDataWarning("D_1_2_4_e");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_4_e" value="<?php $form->safeEcho("D_1_2_4_e"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_4_f"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_4_f"><?php $form->showDataWarning("D_1_2_4_f");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_4_f" value="<?php $form->safeEcho("D_1_2_4_f"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_1_2_5"); ?>:</td>
                    <td class="warn2"><a name="an_D_1_2_5"><?php $form->showDataWarning("D_1_2_5");?></a></td>
                </tr>
                <tr>
                    <td class="l2"><input type="text" name="D_1_2_5" value="<?php $form->safeEcho("D_1_2_5"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_1_2_6"); ?>:</td>
                    <td class="warn2"><a name="an_D_1_2_6"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_1_2_6" value="<?php $form->showDataWarning("D_1_2_6");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_6_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_6_a"><?php $form->showDataWarning("D_1_2_6_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_6_a" value="<?php $form->safeEcho("D_1_2_6_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_6_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_6_b"><?php $form->showDataWarning("D_1_2_6_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_6_b" value="<?php $form->safeEcho("D_1_2_6_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_6_z"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_6_z"><?php $form->showDataWarning("D_1_2_6_z");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_6_z" value="<?php $form->safeEcho("D_1_2_6_z"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_1_2_7"); ?>:</td>
                    <td class="warn2"><a name="an_D_1_2_7"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><?php $form->showDataWarning("D_1_2_7");?></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_7_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_7_a"><?php $form->showDataWarning("D_1_2_7_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_7_a" value="<?php $form->safeEcho("D_1_2_7_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_7_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_7_b"><?php $form->showDataWarning("D_1_2_7_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_7_b" value="<?php $form->safeEcho("D_1_2_7_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_7_c"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_7_c"><?php $form->showDataWarning("D_1_2_7_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_7_c" value="<?php $form->safeEcho("D_1_2_7_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_7_d"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_7_d"><?php $form->showDataWarning("D_1_2_7_d");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_7_d" value="<?php $form->safeEcho("D_1_2_7_d"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_1_2_7_e"); ?>:</td>
                    <td class="warn3"><a name="an_D_1_2_7_e"><?php $form->showDataWarning("D_1_2_7_e");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_1_2_7_e" value="<?php $form->safeEcho("D_1_2_7_e"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            

            
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>

            
            
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("D_2_label"); ?></td>
            </tr>
            
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("D_2_1"); ?>:</td>
                    <td class="warn1"> <a name="an_D_2_1"></a></td>
                </tr>
                <tr>
                    <td class="l1"></td>
                </tr>
            </tr>
            
            
            <?php $form->noteOrErrorsPrint("D_2_1"); ?>
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_2_1_1"); ?>:</td>
                    <td class="warn2"><a name="an_D_2_1_1"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_2_1_1" value="<?php $form->showDataWarning("D_2_1_1");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_2_1_1_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_2_1_1_a"><?php $form->showDataWarning("D_2_1_1_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_2_1_1_a" value="<?php $form->safeEcho("D_2_1_1_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_2_1_1_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_2_1_1_b"><?php $form->showDataWarning("D_2_1_1_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D_2_1_1_b" value="<?php $form->safeEcho("D_2_1_1_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_2_1_1_c"); ?>:</td>
                    <td class="warn3"><a name="an_D_2_1_1_c"><?php $form->showDataWarning("D_2_1_1_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D_2_1_1_c" value="<?php $form->safeEcho("D_2_1_1_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_2_1_2"); ?>:</td>
                    <td class="warn2"><a name="an_D_2_1_2"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_2_1_2" value="<?php $form->showDataWarning("D_2_1_2");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_2_1_2_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_2_1_2_a"><?php $form->showDataWarning("D_2_1_2_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_2_1_2_a" value="<?php $form->safeEcho("D_2_1_2_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_2_1_2_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_2_1_2_b"><?php $form->showDataWarning("D_2_1_2_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_2_1_2_b" value="<?php $form->safeEcho("D_2_1_2_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            

            
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("D_2_2"); ?>:</td>
                    <td class="warn1"> <a name="an_D_2_2"></a></td>
                </tr>
                <tr>
                    <td class="l1"></td>
                </tr>
            </tr>

            <?php $form->noteOrErrorsPrint("D_2_2"); ?>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_2_2_1"); ?>:</td>
                    <td class="warn2"><a name="an_D_2_2_1"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_2_2_1" value="<?php $form->showDataWarning("D_2_2_1");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_2_2_1_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_2_2_1_a"><?php $form->showDataWarning("D_2_2_1_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_2_2_1_a" value="<?php $form->safeEcho("D_2_2_1_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_2_2_1_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_2_2_1_b"><?php $form->showDataWarning("D_2_2_1_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D_2_2_1_b" value="<?php $form->safeEcho("D_2_2_1_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_2_2_1_c"); ?>:</td>
                    <td class="warn3"><a name="an_D_2_2_1_c"><?php $form->showDataWarning("D_2_2_1_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D_2_2_1_c" value="<?php $form->safeEcho("D_2_2_1_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D_2_2_2"); ?>:</td>
                    <td class="warn2"><a name="an_D_2_2_2"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D_2_2_2" value="<?php $form->showDataWarning("D_2_2_2");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_2_2_2_a"); ?>:</td>
                    <td class="warn3"><a name="an_D_2_2_2_a"><?php $form->showDataWarning("D_2_2_2_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_2_2_2_a" value="<?php $form->safeEcho("D_2_2_2_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D_2_2_2_b"); ?>:</td>
                    <td class="warn3"><a name="an_D_2_2_2_b"><?php $form->showDataWarning("D_2_2_2_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D_2_2_2_b" value="<?php $form->safeEcho("D_2_2_2_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <!--END  D.  AUTOMOTIVE DETAIL Part I. PASSENGER CAR FIGURES -->
            
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            
            
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            
            
            
            
            
            

            <!--  D2.  AUTOMOTIVE DETAIL Part II.  COMMERCIAL VEHICLE FIGURES -->

            <tr>
                <td class="header" style="color:black; background-color:#DBDBDB;" colspan="2"><?php $form->LeD("D2_1_title");?></td>
            </tr>
            
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("D2_1_label"); ?></td>
            </tr>

            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>


            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("D2_1_1"); ?>:</td>
                    <td class="warn1"> <a name="an_D2_1_1"></a></td>
                </tr>
                <tr>
                    <td class="l1"></td>
                </tr>
            </tr>
            
            
            <?php $form->noteOrErrorsPrint("D2_1_1"); ?>
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D2_1_1_1"); ?>:</td>
                    <td class="warn2"><a name="an_D2_1_1_1"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D2_1_1_1" value="<?php $form->showDataWarning("D2_1_1_1");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_1_1_a"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_1_1_a"><?php $form->showDataWarning("D2_1_1_1_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_1_1_a" value="<?php $form->safeEcho("D2_1_1_1_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_1_1_b"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_1_1_b"><?php $form->showDataWarning("D2_1_1_1_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D2_1_1_1_b" value="<?php $form->safeEcho("D2_1_1_1_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>


            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D2_1_1_2"); ?>:</td>
                    <td class="warn2"><a name="an_D2_1_1_2"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D2_1_1_2" value="<?php $form->showDataWarning("D2_1_1_2");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_1_2_a"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_1_2_a"><?php $form->showDataWarning("D2_1_1_2_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_1_2_a" value="<?php $form->safeEcho("D2_1_1_2_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_1_2_b"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_1_2_b"><?php $form->showDataWarning("D2_1_1_2_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_1_2_b" value="<?php $form->safeEcho("D2_1_1_2_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_1_2_c"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_1_2_c"><?php $form->showDataWarning("D2_1_1_2_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_1_2_c" value="<?php $form->safeEcho("D2_1_1_2_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D2_1_1_3"); ?>:</td>
                    <td class="warn2"><a name="an_D2_1_1_3"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D2_1_1_3" value="<?php $form->showDataWarning("D2_1_1_3");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_1_3_a"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_1_3_a"><?php $form->showDataWarning("D2_1_1_3_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_1_3_a" value="<?php $form->safeEcho("D2_1_1_3_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_1_3_b"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_1_3_b"><?php $form->showDataWarning("D2_1_1_3_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_1_3_b" value="<?php $form->safeEcho("D2_1_1_3_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q1"><?php $form->LeD("D2_1_2"); ?>:</td>
                    <td class="warn1"> <a name="an_D2_1_2"></a></td>
                </tr>
                <tr>
                    <td class="warn1" style="color:red"><a name="an_1_2">Please note!!!  <br>TOTAL NUMBER of New Contracts = TOTAL NUMBER of <br>Commercial Vehicles granted in the Year</a></td>
                    <td class="l1"></td>
                </tr>
            </tr>
            
            
            <?php $form->noteOrErrorsPrint("D2_1_2"); ?>
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D2_1_2_1"); ?>:</td>
                    <td class="warn2"><a name="an_D2_1_2_1"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D2_1_2_1" value="<?php $form->showDataWarning("D2_1_2_1");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_2_1_a"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_2_1_a"><?php $form->showDataWarning("D2_1_2_1_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_2_1_a" value="<?php $form->safeEcho("D2_1_2_1_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_2_1_b"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_2_1_b"><?php $form->showDataWarning("D2_1_2_1_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D2_1_2_1_b" value="<?php $form->safeEcho("D2_1_2_1_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D2_1_2_2"); ?>:</td>
                    <td class="warn2"><a name="an_D2_1_2_2"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D2_1_2_2" value="<?php $form->showDataWarning("D2_1_2_2");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_2_2_a"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_2_2_a"><?php $form->showDataWarning("D2_1_2_2_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_2_2_a" value="<?php $form->safeEcho("D2_1_2_2_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_2_2_b"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_2_2_b"><?php $form->showDataWarning("D2_1_2_2_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_2_2_b" value="<?php $form->safeEcho("D2_1_2_2_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_2_2_c"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_2_2_c"><?php $form->showDataWarning("D2_1_2_2_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_2_2_c" value="<?php $form->safeEcho("D2_1_2_2_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D2_1_2_3"); ?>:</td>
                    <td class="warn2"><a name="an_D2_1_2_3"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D2_1_2_3" value="<?php $form->showDataWarning("D2_1_2_3");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_2_3_a"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_2_3_a"><?php $form->showDataWarning("D2_1_2_3_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_2_3_a" value="<?php $form->safeEcho("D2_1_2_3_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_1_2_3_b"); ?>:</td>
                    <td class="warn3"><a name="an_D2_1_2_3_b"><?php $form->showDataWarning("D2_1_2_3_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_1_2_3_b" value="<?php $form->safeEcho("D2_1_2_3_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>

            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("D2_2_label"); ?></td>
            </tr>
            
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("D2_2_1"); ?>:</td>
                    <td class="warn1"> <a name="an_D2_2_1"></a></td>
                </tr>
                <tr>
                    <td class="l1"></td>
                </tr>
            </tr>
            
            
            <?php $form->noteOrErrorsPrint("D2_2_1"); ?>
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D2_2_1_1"); ?>:</td>
                    <td class="warn2"><a name="an_D2_2_1_1"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D2_2_1_1" value="<?php $form->showDataWarning("D2_2_1_1");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_2_1_1_a"); ?>:</td>
                    <td class="warn3"><a name="an_D2_2_1_1_a"><?php $form->showDataWarning("D2_2_1_1_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_2_1_1_a" value="<?php $form->safeEcho("D2_2_1_1_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_2_1_1_b"); ?>:</td>
                    <td class="warn3"><a name="an_D2_2_1_1_b"><?php $form->showDataWarning("D2_2_1_1_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D2_2_1_1_b" value="<?php $form->safeEcho("D2_2_1_1_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D2_2_1_2"); ?>:</td>
                    <td class="warn2"><a name="an_D2_2_1_2"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D2_2_1_2" value="<?php $form->showDataWarning("D2_2_1_2");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_2_1_2_a"); ?>:</td>
                    <td class="warn3"><a name="an_D2_2_1_2_a"><?php $form->showDataWarning("D2_2_1_2_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_2_1_2_a" value="<?php $form->safeEcho("D2_2_1_2_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_2_1_2_b"); ?>:</td>
                    <td class="warn3"><a name="an_D2_2_1_2_b"><?php $form->showDataWarning("D2_2_1_2_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_2_1_2_b" value="<?php $form->safeEcho("D2_2_1_2_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_2_1_2_c"); ?>:</td>
                    <td class="warn3"><a name="an_D2_2_1_2_c"><?php $form->showDataWarning("D2_2_1_2_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_2_1_2_c" value="<?php $form->safeEcho("D2_2_1_2_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            
            
            <tr>
                <tr>
                    <td class="q1" rowspan="2"><?php $form->LeD("D2_2_2"); ?>:</td>
                    <td class="warn1"> <a name="an_D2_2_2"></a></td>
                </tr>
                <tr>
                    <td class="l1"></td>
                </tr>
            </tr>

            <?php $form->noteOrErrorsPrint("D2_2_2"); ?>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D2_2_2_1"); ?>:</td>
                    <td class="warn2"><a name="an_D2_2_2_1"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D2_2_2_1" value="<?php $form->showDataWarning("D2_2_2_1");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_2_2_1_a"); ?>:</td>
                    <td class="warn3"><a name="an_D2_2_2_1_a"><?php $form->showDataWarning("D2_2_2_1_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_2_2_1_a" value="<?php $form->safeEcho("D2_2_2_1_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>

            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_2_2_1_b"); ?>:</td>
                    <td class="warn3"><a name="an_D2_2_2_1_b"><?php $form->showDataWarning("D2_2_2_1_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"> <input type="text" name="D2_2_2_1_b" value="<?php $form->safeEcho("D2_2_2_1_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            <tr>
                <tr>
                    <td class="q2" rowspan="2"><?php $form->LeD("D2_2_2_2"); ?>:</td>
                    <td class="warn2"><a name="an_D2_2_2_2"></a></td>
                </tr>
                <tr>
                    <td class="warn2"><input class="iread" type="text" name="D2_2_2_2" value="<?php $form->showDataWarning("D2_2_2_2");?>" readonly="readonly" size="10" maxlength="100"></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_2_2_2_a"); ?>:</td>
                    <td class="warn3"><a name="an_D2_2_2_2_a"><?php $form->showDataWarning("D2_2_2_2_a");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_2_2_2_a" value="<?php $form->safeEcho("D2_2_2_2_a"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_2_2_2_b"); ?>:</td>
                    <td class="warn3"><a name="an_D2_2_2_2_b"><?php $form->showDataWarning("D2_2_2_2_b");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_2_2_2_b" value="<?php $form->safeEcho("D2_2_2_2_b"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D2_2_2_2_c"); ?>:</td>
                    <td class="warn3"><a name="an_D2_2_2_2_c"><?php $form->showDataWarning("D2_2_2_2_c");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D2_2_2_2_c" value="<?php $form->safeEcho("D2_2_2_2_c"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <!--END  D2.  AUTOMOTIVE DETAIL Part II.  COMMERCIAL VEHICLE FIGURES -->
            
            
            <tr>
                <td>            <p>&nbsp;</p></td>
            </tr>
            
            
            
            
            <!--   D. AUTOMOTIVE DETAIL Part III. SHORT TERM RENTAL section     -->
            <tr>
                <td class="header" style="color:black; background-color:#DBDBDB;" colspan="2"><?php $form->LeD("D3_1_title");?></td>
            </tr>
            
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("D3_1_label"); ?></td>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_1_1"); ?>:</td>
                    <td class="warn3"><a name="an_D3_1_1"><?php $form->showDataWarning("D3_1_1");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_1_1" value="<?php $form->safeEcho("D3_1_1"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_1_2"); ?>:</td>
                    <td class="warn3"><a name="an_D3_1_2"><?php $form->showDataWarning("D3_1_2");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_1_2" value="<?php $form->safeEcho("D3_1_2"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_1_3"); ?>:</td>
                    <td class="warn3"><a name="an_D3_1_3"><?php $form->showDataWarning("D3_1_3");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_1_3" value="<?php $form->safeEcho("D3_1_3"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_1_4"); ?>:</td>
                    <td class="warn3"><a name="an_D3_1_4"><?php $form->showDataWarning("D3_1_4");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_1_4" value="<?php $form->safeEcho("D3_1_4"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_1_5"); ?>:</td>
                    <td class="warn3"><a name="an_D3_1_5"><?php $form->showDataWarning("D3_1_5");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_1_5" value="<?php $form->safeEcho("D3_1_5"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_1_6"); ?>:</td>
                    <td class="warn3"><a name="an_D3_1_6"><?php $form->showDataWarning("D3_1_6");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_1_6" value="<?php $form->safeEcho("D3_1_6"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_1_7"); ?>:</td>
                    <td class="warn3"><a name="an_D3_1_7"><?php $form->showDataWarning("D3_1_7");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_1_7" value="<?php $form->safeEcho("D3_1_7"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            
            
            
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("D3_2_label"); ?></td>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_2_1"); ?>:</td>
                    <td class="warn3"><a name="an_D3_2_1"><?php $form->showDataWarning("D3_2_1");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_2_1" value="<?php $form->safeEcho("D3_2_1"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_2_2"); ?>:</td>
                    <td class="warn3"><a name="an_D3_2_2"><?php $form->showDataWarning("D3_2_2");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_2_2" value="<?php $form->safeEcho("D3_2_2"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_2_3"); ?>:</td>
                    <td class="warn3"><a name="an_D3_2_3"><?php $form->showDataWarning("D3_2_3");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_2_3" value="<?php $form->safeEcho("D3_2_3"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_2_4"); ?>:</td>
                    <td class="warn3"><a name="an_D3_2_4"><?php $form->showDataWarning("D3_2_4");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_2_4" value="<?php $form->safeEcho("D3_2_4"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_2_5"); ?>:</td>
                    <td class="warn3"><a name="an_D3_2_5"><?php $form->showDataWarning("D3_2_5");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_2_5" value="<?php $form->safeEcho("D3_2_5"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_2_6"); ?>:</td>
                    <td class="warn3"><a name="an_D3_2_6"><?php $form->showDataWarning("D3_2_6");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_2_6" value="<?php $form->safeEcho("D3_2_6"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            
            
            
            <tr>
                <td class="header" style="color:black; text-align:left;" colspan="2"><?php $form->LeD("D3_3_label"); ?></td>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_3_1"); ?>:</td>
                    <td class="warn3"><a name="an_D3_3_1"><?php $form->showDataWarning("D3_3_1");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_3_1" value="<?php $form->safeEcho("D3_3_1"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_3_2"); ?>:</td>
                    <td class="warn3"><a name="an_D3_3_2"><?php $form->showDataWarning("D3_3_2");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_3_2" value="<?php $form->safeEcho("D3_3_2"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_3_3"); ?>:</td>
                    <td class="warn3"><a name="an_D3_3_3"><?php $form->showDataWarning("D3_3_3");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_3_3" value="<?php $form->safeEcho("D3_3_3"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_3_4"); ?>:</td>
                    <td class="warn3"><a name="an_D3_3_4"><?php $form->showDataWarning("D3_3_4");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_3_4" value="<?php $form->safeEcho("D3_3_4"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_3_5"); ?>:</td>
                    <td class="warn3"><a name="an_D3_3_5"><?php $form->showDataWarning("D3_3_5");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_3_5" value="<?php $form->safeEcho("D3_3_5"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            <tr>
                <tr>
                    <td class="q3" rowspan="2"><?php $form->LeD("D3_3_6"); ?>:</td>
                    <td class="warn3"><a name="an_D3_3_6"><?php $form->showDataWarning("D3_3_6");?></a></td>
                </tr>
                <tr>
                    <td class="l3"><input type="text" name="D3_3_6" value="<?php $form->safeEcho("D3_3_6"); ?>" size="10" maxlength="100" style="height:12px;" ></td>
                </tr>
            </tr>
            
            
            
            
            <!--END   D. AUTOMOTIVE DETAIL Part III. SHORT TERM RENTAL section     -->
            
            

            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input name="pfhidden" type="hidden" value="<?php $form->rand();?> ">
                    <input name="submit"  type="submit" value="<?php $form->Le("form_submit"); ?>" style="color:white; background-color:#87C257;">
                </td>
            </tr>
            </table>
            
            <script language="javascript" type="text/javascript"> calc(); </script>
            <script language="javascript" type="text/javascript"> addEvents(); </script>
            
            
        </form>
    </div>
<!--[if IE]>
    </v:fill>
</v:rect>
<![endif]-->

<?php

?>
</body>
</html>
