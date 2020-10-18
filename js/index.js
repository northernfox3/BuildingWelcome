$(function(){
    $.post("check.php",{
        aaa:'yes'
    },function(a,b){
     if(a=="nocookie"){
        $("#bg").show();
        $("#window").show();
     }
    });
    
    $("#reset").click(function(){
        $("#bg").show();
        $("#window").show();
    });
    
    $("#setting").click(function(){
        var nc = $("#nc").val();
        $("#nicheng").val(nc);
        $.post("nicheng.php",{
            nc:nc
        },function(a,b){
        $("#bg").hide();
        $("#window").hide();
        });
        
    });
    
    
    setInterval(function(){
        
    $.get("php.php",function(a,b){
    $("#chat .window").html(a);
    });
    },1000);
    
    
    
    $("#send").click(function(){
        var content = $("#content").val();
        var nicheng = $("#nicheng").val();
        $(this).val("sending...");
        $(this).attr("disabled","True");
        $(this).css("backgroundColor","#747474");
        $.post("send.php",{
        content:content,
        nicheng:nicheng
        },function(a,b){
        if(a == "ok"){
            $("#content").val(null)
            return false;
        }else{
            alert('fail!');
            return false;
        }  
        });
        
  
               var count = 1;
                var countdown = setInterval(CountDown, 1000);//每1秒执行一次
                function CountDown() {
                    $("#send").val("Sent successfully");
                    if (count == 0) {
                        $("#send").attr("disabled",false);
                        $("#send").val("send");
                        $("#send").css("backgroundColor","#FB5200");
                        clearInterval(countdown);//clearInterval() 方法可取消由 setInterval() 设置的 timeout。
                    }
                    count--;
                    }
  
  
        
    });  
  

   
    
    

});