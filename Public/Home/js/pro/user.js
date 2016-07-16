/**
 * Created by jinguodong on 2015/5/13.
 */
$(function(){
    function User(){
    }
    User.prototype.emailCheck = function(){

    }

    window.User = User;
});

$(function(){
    function Verify(){
        this.apiPath = "http://localhost/taoerhuo/1/index.php/Index/Index/api";
    }
    Verify.prototype.emailCheck = function(){
        var email = $("#email").val();
        var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+/;
        var flag = reg.test(email);
        if(flag == false){
            $("#email-warning").html('您输入的邮箱有误请重新输入');
            $("#email-warning").attr('class', 'text-danger');
            return false;
        }
        else{
            $("#email-warning").html('');
        }
        var data = {"method":"email-check","email":email};
        var url = this.apiPath;
        $.get(url,data,function(res){
            // alert(res.message);
            switch(res.state){
                case 'success':
                    $("#email-warning").html(res.message);
                    $("#email-warning").attr('class', 'text-success');
                    break;
                case 'failed':
                    $("#email-warning").html(res.message);
                    $("#email-warning").attr('class', 'text-danger');
                    break;
                case 'api-error':
                    $("#email-warning").html(res.message);
                    $("#email-warning").attr('class', 'text-danger');
                    break;
                default:
                    $("#email-warning").html('未知原因'+res.state);
                    $("#email-warning").attr('class', 'text-danger');
            }
        }, 'json');
    }
    Verify.prototype.passwordCheck = function(){
        var password = $("#password").val();
        var password2 = $("#password2").val();
        var reg = /^[0-9_a-zA-Z]{6,20}$/
        var flag = reg.test(password);
        if(!flag){
            $("#password-warning").html("限制输入数字、字母、下划线，6-20长度，不能为空");
            $("#password-warning").attr('class', 'text-danger');
            return false;
        }else{
            if(password != password2){
                $("#password-warning").html("密码与确认密码不匹配");
                $("#password-warning").attr('class', 'text-danger');
                return false;
            }else{
                $("#password-warning").html("密码正确");
                $("#password-warning").attr('class', 'text-success');
                return true;
            }
        }
    }

    window.Verify = Verify;
});

$(function(){
    $("#email").focusout(function(){
        var ver = new Verify();
        ver.emailCheck();
    });
    $("#password2").focusout(function(){
        var ver = new Verify();
        var flag = ver.passwordCheck();
    });

    /**
     * 用户中心-修改密码按钮
     * 提交用户修改密码请求-AJAX+POST
     * @param  {[type]} ){                 } [description]
     * @return {[type]}     [description]
     */
    $("#modifyExecute").click(function(){
    });
});