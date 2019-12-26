<?php

/**
* 古典问题：有一对兔子，从出生后第3个月起每个月都生一对兔子，小兔子长到第三个月后每个月又生一对兔子，假如兔子都不死，问每个月的兔子总数为多少？
*/

/*$pass = md5('123456a');
echo password_hash($pass, PASSWORD_DEFAULT);*/

$tmp = "a" == 0?1:2;

echo $tmp;

/*class rabbit{

	public function getNumber($n){
		$m1 = 1, $m2 = 1, $m0 = 24;
		if($n = 1 || $n == 2) {
			return 1;
		}else{
			for ($i=3; $i<=$n ; $i++) { 
				# code...
			}
		}
	}
	public static main(String[] args) {
		// TODO Auto-generated method stub
		System.out.println("第1个月的对数: 1");
		System.out.println("第2个月的对数: 1");
		int f1 = 1, f2 = 1, f, M=24;
		for(int i=3; i<=M; i++) {
			f = f2;
			f2 = f1 + f2;
			f1 = f;
			System.out.println("第" + i +"个月的对数: "+f2);
		}
	}

}*/
/* 8. 在桌面上有一堆硬币,其中有十三枚正面向上,其他的硬币都是反面向下,硬币大小形状都一样,你闭上眼睛(无其他人,工具帮助),用手将硬币分成两堆,使两堆正面朝上的数目相等.请问你有什么办法? 
9 有一种小虫,每隔2秒钟分裂一次。分裂后的2只新的小虫经过2秒钟后又会分裂。如果最初某瓶中只有一只小虫,那么2秒后变2只,再过2秒后就变4只„„2分钟后,正好满满一瓶小虫。假设这个瓶内最初放入2只这样的小虫。 问:经过多少时间后,正巧也是满满的一瓶? 
10 问题一：我手上有个茶杯，你们假设自己是开茶店的，这时候有个人走进来却要喝咖啡，你没有，怎么办？ 这个问题我回答的极差，只是比较了咖啡与茶的优缺点，后来胡总就说既然是全球技术服务部，就要从技术和服务两方面来回答（对了忘记说了，我应聘的是全球技术服务部的海外技术支持，侧重数通，核心网，3G接入网以及无线等方面） 问题二：胡总随手画了四个图形，一个圆中有圆，一个圆中有方，一个方中有圆，一个方中有方，问：你们喜欢哪一个？说说原因 我一看到，马上选了那个圆中有方的，解释是，我觉得这些图形代表一个人的性格，作为一个工程师，需要有坚强的内心，但同时他又要有与人沟通的能力，需要圆润的外表。（呵呵，大概就是这样说的）而其他2人由于被我占了先机，结果回答得非常牵强，哈哈
问题三：华为每个月给你报销1000块电话费，而你打了900，其中有10块是给你女朋友打的，你会不会找华为报销？ 这 种问题真是让人汗啊！他们两个一个说会，一个说不会，轮到我时，我突然急中生智：“这种情况在我身上是不会发生的，因为我一般会买2台手 机，一台用于私人联系，一台用于公司，这样一来不但不会发生胡总说的情况，也不会因为跟女朋友褒电话粥而影响了客户电话。”一直没有表情的胡总听后居然哈 哈哈笑了起来，汗~可是更让我汗的是他的答案：“其实呢，华为公司鼓励员工爱工作，更要爱家庭，我们也是鼓励员工尽量报销家里费用的。”~~~~~~~我 晕死„„ 问题四：井盖为什么是圆的？ （呵呵，太常见了吧？） 我答了2条，其他人也一人答了2条，呵呵，什么热涨 冷缩啦，不会掉下去啦，方便运输啦„„结果胡总非常不满意，说：“你们观察问题的范围怎么 这么窄！”随后他大概又说了4，5条原因，什么圆的设计参数只有一个（半径），什么圆最节省材料，什么因为井盖节省了材料所以井中挖出的土方也就少了„„ 我边听边汗，虽然很早就知道这道题，但是答案却一直没有想过，晕死„„ 问题五：情景题，两个网络连在一起，一个爱立信的，一个华为的，客户通过华为这边与爱立信远端的客户通信，这时候突然出现故障，你还不能确定是哪个网络的问题，现在该怎么办？


明源面试，笔试题目如下

一、SQL测试题

1 有两张表

　根据给出的SQL语句，写出返回的行数分别是多少？为了形象直观的显示，我给出了sql语句执行结果。

A 学生表        B分数表  

新题目

select a.* from a inner join b on a.id=b.id;                                       

 

select a.* from a,b where a.id=b.id                                                 

 

 

select a.* from a left join b on a.id=b.id;                                        

 

 

select a.* from a  right join b on a.id=b.id;                                     

 

 

select a.* from a right join b on a.id=b.id and a.id<7;                       

 

 

select a.* from a right join b on a.id=b.id where b.id<7                      

 

老题目

select b.* from a left join b on a.id=b.id;                                          

 

select b.* from a left join b on a.id=b.id;                                          

 

 

select b.* from a  right join b on a.id=b.id;                                      

以上语句返回的行数分别是多少？

答案:见图就知道了

 

(1)删除age为18-30的成绩

delete from b where b.id in

(select id from a 

where age between 18 and 35)

 

(2)统计每门功课前两名学生的ID，name ,subject ,score

 select c.* from(select a.id,a.name,b.subject,b.score from  a, b where a.id=b.id) c
 where c.name in (select top 2 d.name from 
 (select a.id,a.name,b.subject,b.score from  a, b where a.id=b.id) d
 where d.subject=c.subject order by d.score desc
 )order by c.subject

 

 

 

(3)实现如下格式



这是一个行转列

select b.ID ID,

sum(case when b.Subject='语文' then score end)语文,

sum(case when b.Subject='数学' then score end)数学

from b group by b.id

 

注：打下划线的是要填的内容

(4)新建一个视图查询  ID，name,age,subject ,score ，如果一个学生对应有多个记录 则全部显示出来？

if exists (select * from sysobjects where name='get_score')

drop view  get_score;

create view get_score

as

select a.id,a.name,b.subject,b.score from a left join b on a.id=b.id;

 

(5)新建一个存储过程 ， 实现输入学生ID（存储过程的输入参数） , 显示学生姓名以及平均分，格式如下：李4：45

create procedure get_avgScore(@id int)

as

declare @name varchar(50)

declare @avg float

begin

select @name=a.name+':',@avg=avg(score) from a left join b on a.id =b.id

where a.id=@id group by (a.name+':')

print(@name+cast(@avg as varchar(4)))

end;

exec get_avgScore 4

 

二、asp.net测试题

(1)请列举有哪几种页面重定向的方法 ，并解释(至少两种以上)

(2)ASP.NET页面传值的集中方法，并分析其利弊(至少两种以上)

(3)说说URL传值应注意的问题(至少两点以上)

1.URL传值

这是经典的传值方式， 如XXX.aspx?id=1&name=c; 不过所传递的值是会显示在浏览器的地址栏上的，而且不能传递对象。所以这种方法一般用于传递的值少且安全性要求不高的情况下。

2．Session传值

这种方法将每份数据存储于服务器变量中，可以传递比较多的数据，并且安全性较高，所以常用于用户身份的验证功能中。不过，Session变量如果存储过多的数据会消耗过多的服务器资源，编程者在使用时应该慎重。Session可在应用程序的多个页面中以名称/值对的方式共享，直到浏览用户关闭自己的浏览器或者服务器Session超时（可设置，默认为20分钟）停止。

Session具有以下特点：

Session中的数据保存在服务器端；

Session中可以保存任意类型的数据；

Session默认的生命周期是20分钟，可以手动设置更长或更短的时间。

3．Cookie传值

Cookie是一种比较特殊的数据存储方式，因为这种方式将数据存储于浏览用户的电脑中，以文本文件的形式存在于磁盘中。这种方式非常有意思，很多登录系统就是利用Cookie实现用户自动登录。即用户登录一次的登录信息将被写入到用户电脑的Cookie文件中，下次登录时，网站自动读取该Cookie完成身份验证。通过Cookie传递数据虽然很方便，保存时间可以自由设置，但是安全性不高，编程者不应过于依赖Cookie，而应采用结合的方式完成敏感数据的存储。

Cookie保存数据有以下特点：

Cookie中的数据保存在客户端；

Cookie中只能保存字符串类型的数据，如果需要在Cookie中保存其它类型数据，需要将其转换成字符串类型后保存；

Cookie也有其默认生命周期，也可以手动设置，最大可设置成50年之后过期。

4．Server.Transfer传值

这个方法的步骤相对较多，使用该方法可以在另一个页面以公开对象属性的方式来存取值，使用这种方法是面向对象的。该方法的代码编写并不复杂，首先通过定义一个public权限的属性，该属性可返回所需传递的值。然后在第二个页面中，使用Context.Handler属性来获得前一个页面实例对象的引用，即可通过访问自定义的属性获取需要的值。

Server.Transfer方式（或称HttpContext方式）

　　我们还可以使用 Server.Transfer方式（或称HttpContext方式）在页面之间传递变量，此时，要传递的变量可以通过属性或方法来获得，使用属性将会比较容易一些。好，让我们在第一个页面中来写一个用来获得TextBox值的属性：

　　Code

publicstringGetName
{
get{returntxtName.Text;}
}

　　我们需要使用Server.Transfer把这个值发送到另外一个页面中去，请注意Server.Transfer只是发送控件到一个新的页面去，而并不会使浏览器重定向到另一个页面。所以，我们我们在地址栏中仍然看到的是原来页面的URL。如下代码所示：

Server.Transfer("WebForm5.aspx");

　　接下来，我们到"WebForm5.aspx"看看：

　　Code

//YoucandeclarethisGloballyorinanyeventyoulike
WebForm4w;
//GetsthePage.ContextwhichisAssociatedwiththispage
w=(WebForm4)Context.Handler;
//AssigntheLabelcontrolwiththeproperty"GetName"whichreturnsstring
Label3.Text=w.GetName;

5．Application传值

严格地说应该是通过HttpApplication对象在服务器端生成一个状态变量来存储所需的信息，该HttpApplication对象变量的可用范围覆盖整个WEB应用程序。所以该对象一般存储一些要公布的信息，如在线人数等，而对于那些涉及用户个人的敏感数据则不用这种方法存储。HttpApplication对象有两个常用的方法，即Lock和UnLock方法，可用于处理多个用户对存储在Application变量中的数据进行写入的问题。Lock方法锁定全部的Application变量，从而阻止其他用户修改Application对象的变量值，UnLock方法则解除对HttpApplication对象变量的锁定。通过HttpApplication对象传值的方法和Session比较相似，但是Session是对于每个单独的用户，当该用户关闭浏览器，则Session失效。HttpApplication对象存储的变量是针对所有访问程序的用户，即使有用户关闭了浏览器，变量的值不会丢失。

Code

//为Application变量赋值
Application["Name"]=txtName.Text;
Response.Redirect("WebForm5.aspx");
//从Application变量中取出值
if(Application["Name"]!=null)
Label3.Text=Application["Name"].ToString();

 

Mvc中这样使用，

如在Globals.cs赋值：Application["names"] = "ss";

在其它页面的Controller中这样调用：

string dd = this.HttpContext.Application["names"].ToString();

6．跨页面传送

跨页面传送和调用HttpServerUtility对象的Transfer方法有相似之处，不过效率更高。因为调用HttpServerUtility对象的Transfer方法是基于服务器的方法，而跨页面传送是基于浏览器端的。这个方法主要是设置控件的“PostBackUrl”属性，使该控件（如Button）操作后转向指定页面，并且这个指定页面可以直接获取前一个页面的所有控件对象及其属性值。

7.如果有特殊需要，还可以使用其他方法，例如通过数据库存储临时数据等。

 

(4) 用代码实现： 新建一个XML文档 将字符串 "<item>NBA</item>" 读到文档里

        public void addxml()

        {

            XmlDocument doc = new XmlDocument();

            doc.LoadXml("<item>NBA</item>");

            doc.Save("doc.xml");

        }

 

(5)解释一下装箱和拆箱，并附上代码说明 

        public void show()

        {

            int val = 100;

            object obj = val;

            Response.Write("对象的值:" + obj+"<br/>");

            //这是一个装箱的过程，是将值类型转换为引用类型的过程

 

            int vals = 100;

            object objs = val;

            int num = (int)objs;

            Response.Write("num:" + num);

            //这是一个拆箱的过程，是将值类型转换为引用类型，再由引用类型转换为值类型的过程

        }

 

(6) 1.写出结果

        public abstract class A

        {

            public A()

            {

                Console.WriteLine('A');

            }

            public virtual void Fun()

            {

                Console.WriteLine("A.Fun()");

            }

        }

 

        public class B : A

        {

            public B()

            {

                Console.WriteLine('B');

            }

 

            public newvoid Fun()

            {

                Console.WriteLine("B.Fun()");

            }

 

            public static void Main()

            {

                A a = new B();

                a.Fun();

            }

        } 

      

　　结果：A,B,A.Fun();

 

3 情景A

房地产楼盘有很多种项目，每个项目有不同类型的房子，像普通商品房 是按照面积*均价 来计算价格，而别墅是按照数量来计算价格

情景B

公司老总和销售总监希望希望立刻得知楼盘的销售情况

(1)请使用UML 来描述A 中各对象的关系

(2)请给A中的各对象建表 ，表名和字段 自己定

(3)请结合B的场景，用一种设计模式来实现（编码实现）

 

4 手写代码实现如下table样式



 答：代码如下： 

　　<table style="background-color:#ffffff" border="1px">

        <tr>

            <td rowspan="2" width="120px" height="25px">1</td>

            <td width="120px" class="style1">2</td>

            <td width="120px" class="style1">3</td>

        </tr>

        <tr>

            <td colspan="2" rowspan="2">5</td>

        </tr>

        <tr>

            <td width="120px" height="25px">4</td>

        </tr>

        </table>

 

5.Javascript测试题

 (1) (a+2)-1= NAN

 (2)ParseInt("7")+3=10

 (3)

  var a="8"  ;

  var b=5;

  var c=a+b;

  var d=a-b;

  c=85 （拼接字符串）

  d=3  （数字相减）

(4)

请扩展JS中Array的功能 让其也能实现类似于C#中ArrayList的功能

如: Array arr=new Array(); arr.Add("arrvalue");

答：  Array.prototype.Add = function (o) {
            this[this.length] = o;
        }

(5)请列举你所用过或自己编写的Javascript库， 就其中所涉及的思想或者写的比较好的地方谈谈你的看法

 答：JQUERY,EXT

 

6. HTML 页面上有一个DIV ID 为 showInfo,， 有一个Button<input type="button"  value="显示" name="btnOK">现要求实现点击按钮 在DIV里 显示一个超链接 <a href=www.mysoft.com.cn>明源软件</a>,自己写一个JS函数实现

 答：代码如下：

　　  function Showlink()   

        {

            document.getElementById("showlink").innerHTML = "<a href=www.mysoft.com.cn>明源科技</a>";

        }

      <div id="showlink">

      <input id="btnok" type="button" value="show" name="btnOk" onclick="Showlink();"/>

 

6 逻辑题

计划用水量为 wplan,用户实际用水量为wsj，如果实际用水量小于wplan，按照price1收费，实际用水量超过wplan,并且小于1.2wplan

超过部分按照price2收费，实际用水量大于1.2wplan，超过部分按照price3收费，请用一个函数iff(exp1,exp2,exp3) 来计算用户的水费，要求 如果exp1为true ,返回exp2,否则返回exp3,函数可以嵌套

答： IIf(wplan > wsj, wsj * price1, IIf(wsj < wplan * 1.2, wplan * price1 + (wsj - wplan) * price2, wplan * price1 + 0.2 * wplan * price2 + (wsj - wplan * 1.2) * price3))

*/