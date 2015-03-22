<?php

?>

<div id="countdown" class="center_block">
    <label id="label" for="time">Time</label>
    <input id="time" name="time" type="text" value="" placeholder="Input the time" class="form-control"/>
    <button id="start" class="btn-default" onclick="startCounter()">Start</button>
    <button id="start" class="btn-default" onclick="countdown.stop()">Stop</button>
</div>

<script>

    function Countdown(options){
        if ( arguments.callee._singletonInstance )
            return arguments.callee._singletonInstance;
        arguments.callee._singletonInstance = this;

        var timer,
            instance = this,
            seconds = options.seconds || 10,
            interval = options.interval || 1000,
            updateStatus = options.updateStatus || function(){},
            counterEnd = options.counterEnd || function(){};

        function decrementCounter(){
            updateStatus(instance.seconds);
            if(instance.seconds == 0 ){
                counterEnd();
                instance.stop();
            }
            instance.seconds--;
        };

        this.start = function(){
            clearInterval(timer);
            timer = setInterval(decrementCounter, interval);
        };

        this.stop = function(){
            clearInterval(timer);
        };

        this.configure = function(options){
            if(options.seconds){
                instance.seconds = options.seconds;
            }
            if(options.interval){
                instance.interval = options.interval;
            }
            if(options.updateStatus){
                updateStatus = options.updateStatus;
            }
            if(options.counterEnd){
                counterEnd = options.counterEnd;
            }
        };
    };

    var countdown = new Countdown({
        updateStatus:function(s){$("#label").html(s);  },
        counterEnd:function(){alert("end");}
    });

    function startCounter(){
        var sec = parseInt($("#time").val());
        if(!sec ){
            return;
        }
        countdown.configure({
            seconds: sec
        });
        countdown.start();
    }

</script>
