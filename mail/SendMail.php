<?php
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/21
 * Time: 10:43
 */

namespace mail;


class SendMail
{
    static private $instance;
    static  $obj = '';
    private  function __construct(){  }
    public static function getInstance(){
        if (!self::$instance instanceof self) {
            self::$instance = new self(self::$obj);
        }
        return self::$instance;
    }

    private function __clone(){}

    /**
     * @example
     * echo (\app\service\factory\ExpressFactory::mailFactory('SendMail'))->sendMails('aaaaa@qq.com,hxkeyx@163.com',[
        'subject'=>'主题哦',
        'body'=>'有空过来吃饭 <b>in bold!</b>'
        ]);
     * @note send the email
     * @title send the email
     * @button 1
     * @nav 1
     * @author: tata
     * @date: 2019/3/21 13:22
     */
    public function sendMails($to,$data,$param=[]){

        $address = array_unique(array_filter(explode(',',str_replace('，',',',trim($to)))));
        //实例化类
        $mail = new PHPMailer;
        $mail->isSMTP();                                            //使用smtp鉴权方式发送邮件
        $mail->SMTPAuth = true;                                     //smtp需要鉴权 这个必须是true
        $mail->Host = $param['from_host']??'smtp.qq.com';                                // Specify main and backup SMTP servers
        $mail->Username = $param['from_name']??'1000000@qq.com';                      // SMTP username
        $mail->Password = $param['from_pass']??'doudfgsrnnqmbdij';                       // SMTP password
        $mail->CharSet = 'UTF-8';
        $mail->SMTPSecure = 'ssl';                                  // 设置使用ssl加密方式登录鉴权
        $mail->Port = 465;                                          // 设置ssl连接smtp服务器的远程服务器端口号
        $mail->setFrom($param['from_address']??'1000000@qq.com');    // from
        $mail->addAddress($to);  // Add a recipient
        $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
        foreach ($address as $k => $v) {
            if (!preg_match($pattern, $v)) return 'Message could not be sent Mailer Error: ' . $v."邮箱格式有误";
            $mail->AddAddress($v);     //设置收件的地址
        }
        $mail->isHTML(true);                                      // Set email format to HTML
        /////////////////////////////////////////text message////////////////////////////////////
        $mail->Subject = $data['subject'];
        $mail->Body    = $data['body'];

        if(!$mail->send()) {
           return  'Message could not be sent Mailer Error: ' . $mail->ErrorInfo;
        } else {
            return 'Message has been sent';
        }
        /////////////////////////////////////////html message////////////////////////////////////
        /*$mail->Subject = '主题';
        $mail->msgHTML(file_get_contents($rootPath.'/content.html'));

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }*/
    }
}
