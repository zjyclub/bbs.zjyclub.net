跳到内容
搜索或跳转到...

拉取请求s
问题
市场
探讨
 
@zjyclub 
Learn Git and GitHub without any code!
Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.


zjyclub
/
zjyclub.net
1
🔖 Custom notification settings
Looking for a little more control? Now you can choose which types of activity you’d like to be notified about per repository.

0
0
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
Settings
zjyclub.net/fb.php /
@zjyclub
zjyclub fb.php
...
最新提交 b52e08e 于 2017 年 11 月 20 日
 历史
 1 个贡献者
1460 行 （1340 sloc） 70.9 KB
  
<？php
/**
* 程序说明
* @package文件盒
* @author乔斯 <jooies@ya.ru>
* @copyright （c） 2014-2016
* @since版本 1.10.0.1
 *
* 设置说明
[$sitetitle - ]
[ $user - *
* $pass - *
* $safe_num - [0]，[3-5]
[$mail] - [邮件）]！
 */
标题（"内容类型：文本/html;字符集=utf-8");
date_default_timezone_set（"亚洲/上海");
session_start();
error_reporting（1);
 $站点标题 = "文件框";
 $用户= "zjyclub";
 $通行证= "djzjm"。;
 $ safe_num = 0;//+，\，\3-5
 $邮件= "i@hezi.be";//[，]，\邮件）\！
 $meurl =  $ _SERVER="PHP_SELF"];
 $os =（ DIRECTORY_SEPARATOR= =\）？"窗口"："linux";
 $op =（isset（$ _REQUEST= "操作"））？html （$ _REQUEST="op"）：';
 $行动=（isset（$_REQUEST= "行动" =）） ？html特别字符（$ _REQUEST= "行动"=）：'';
 $文件夹=（isset（$_REQUEST= "文件夹" =）） ？html特殊字符（$ _REQUEST="文件夹"）：'./';
 $arr = str_split（$文件夹);
如果（$arr=计数（$arr） -1=！\'/'$文件夹。'/';
而（preg_match（'/\.\/'$文件夹）$ 文件夹= preg_replace（'/\.\/'，\/\$文件夹);
而（preg_match（'/\/'，$文件夹）$ 文件夹= preg_replace（'/\/\/'，'/'，$文件夹);
如果（$文件夹= ' =$文件夹= "./";
 $ufolder =  $文件夹;
如果（$_SESSION="错误" = >  $safe_num & & safe_num！ = 0） 打印机错误 （'{！   );

/****************************************************************/
/* 用户登录函数                                                 */
/*                                                              */
/* [饼干]/
/****************************************************************/

如果（$ _COOKIE="用户" = ！=  $用户 = = $_COOKIE= "通行证"= = md5（$通行证)) {
	如果（ html特别字符（$_REQUEST="用户"=   _REQUEST =   ) {
	    setcookie（'用户'，$ 用户，时间（）=60*60*24*1);
	    setcookie（'通行证'，md5（$pass），时间（） =60*60*24*1);
	}还{
		如果（html 特别字符（$ _REQUEST= [用户'） =  $用户 =html特别字符（$ _REQUEST="通行证"=）  $er = true;
		登录（$er);
退出;
	}
}


/****************************************************************/
/* 功能主顶（） */
/*                                                              */
/* 控制站点的样式和头部内容                                     */
/* $title - > $showtop - > *
/****************************************************************/

函数主顶（$标题，$showtop = true) {
    全球  $meurl，$网站标题，$op;
    回声 "<！DOCTYPE html>\n<meta 名称="机器人的内容="noindex，跟随" />\n<head>\n<元名称='视口'内容\"宽度=设备宽度、初始比例=1'/>\n"
."<title>$sitetitle - $title</title>\n"
."</头>\n"
."<正文>\n"
."<style>\n\字体系列：'Verdana'，'微软雅海';\。\框[边框：1px 实#ccc;背景色：#fff;填充：10px;]abbr [文本装饰：无;]。标题[边框：1px 实心 #ccc;边框底部：0;字体重量：正常;文本对齐：左;宽度：678px;填充：10px;字体大小：12px;颜色：#666;背景颜色：#F0F0F0;]。右 [浮动：右;文本对齐：右！重要;]。内容[宽度：700px;边距：自动;溢出：隐藏;字体大小：13px;]。login_button[高度：43px;线高：18px;字体系列：'坎达拉';]。login_text[字体系列：'Candara'，'微软雅海';垂直对齐：中间;填充：7px;宽度：40%;字体大小：22px;边框：1px #ccc;]输入[类型]文本：焦点，输入[类型]密码：悬停[大纲：0;背景颜色：#f8f8f8;]输入[类型]文本：悬停，输入[类型]：悬停，输入[类型]密码]：活动[大纲：0;背景颜色：#f8f8f8;]h2=颜色：#514f51;文本对齐：中心;边缘：16px 0;字体大小：48px;背景图像：-webkit-渐变（线性， 0 0， 0 底部， 从 （#7d7d7d）， 到 #514f51）;） - webkit - 背景剪辑： 文本; 背景剪辑： 文本; - webkit 文本填充颜色： 透明; 字体系列： '坎达拉'， '卢西达桑斯'， '微软 Yahei'！ 重要;]跨度 [边距底部：8px;]a：访问[颜色：#333;文本装饰：无;]a：悬停[颜色：#999;文本装饰：无;]a[颜色：#333;文本装饰：无;边框底部：1px 实#CCC;]a：活动[颜色：#999;文本装饰：无;]。标题 a， td a，. 菜单 a [边框：0] 文本区域 [大纲： 无; 字体系列： 'Yahei Consolas 混合'， 康索拉斯， 韦尔达纳， 塔霍马， 阿里亚尔， 海尔维蒂卡， '微软雅海'， 桑斯 - 塞里夫 ！重要;字体大小：13px;边框：1px 实心 #ccc;边距顶部：-1px;填充：8px;线高：18px;宽度：682px;最大宽度：682px;]输入.按钮=背景颜色：#eeeeee;文本对齐：中心！重要;大纲：无;边框：1px 实心 #adadad;*显示：内联;颜色：#000;填充：3px 18px;字体大小：13px;边距顶部：10px;过渡：边框颜色 0.5s;]输入.按钮：悬停[背景色：#e5f1fb;边框颜色：#0078d7;]输入.mob [填充：3px 40px;]输入.text，选择，选项，上传[边框：1px 实心 #ccc;边距：6px 1px;填充：5px;字体大小：13px;高度：16px;]体[背景色：#fff;边缘：0px 0px 10px;]。错误 [字体大小：10pt;颜色：#AA2222;文本对齐：左].菜单=位置：固定;字体大小：13px;=。菜单 li [列表样式类型：无;填充：7px 25px;边框左：#fff实心 3px;边缘底部：2px;]。菜单 li.curr =边框-左：#666实心 3px;背景色：#f7f7f7;=.菜单 li：悬停=边框颜色：#469;背景色：#ededed;]。odTable 范围 [光标：指针;]。odTable b=颜色：#ccc;字体大小：12px;=。菜单 a：悬停[颜色：#707070;]。表格[背景色：#777;颜色：#fff;]th =文本对齐：左;高度：40px;行高：40px;边框底部：3px 实心 #dbdbdb;字体大小：14px;背景颜色：#f8f8f8！重要;]表[边框：1px 实#ccc;边框折叠：折叠;]t=颜色：#666;高度：31px;字体大小：12px;]t_ a _ 颜色： #333 [th] 颜色： #333;\tr：第一子（奇）[背景色：#fff;]tr：第一子（甚至）[背景色：#f5f5f7;]tr：悬停[背景色：#ebeced;]。上传[宽度：50%;]。首页，.com显示：无;]。长[宽度：70%].短=宽度：20%=.打开=宽度：40px;=。重命名 [宽度：50px;][n@media手持，只有屏幕和（最大宽度：960px）[文本区域]宽度：计算（100% - 18px）;最大宽度：计算（100% - 18px）;]。上传[宽度：计算（100% - 18px）;]。login_button=宽度：100%;边距顶部：0 ！重要;填充：20px 5px ！重要;高度：60px;字体大小：23px！重要;*。login_text[显示：块;边距底部：0;填充：20px 10px;宽度：100%;边框底部：0;]。菜单 [左边缘： -40px;位置： 静态; 填充：0;]。菜单 li [填充底部： 8px;]。标题[宽度：计算（100% - 22px）;]输入.mob=高度：40px;字体大小：15px;宽度：100%;d播放：块;=。内容[宽度：100%]input.按钮[填充：3px 10px;]。移动 b，.mobi [显示：无;]。com[显示：内联;]字体重量：正常;字体大小：12px;]。打开，.重命名[宽度：25px;]</样式>\n";
     $回=（$op！="家"）？ $回= "<a href='$meurl\op\home\amp;folder\". $_SESSION[ 文件夹']."'><li>"。 $_SESSION[ 文件夹']."</li></a>\n"：$返回 = '';
    回音"<h2>$sitetitle</h2>\n";
    如果（$显示）=//=
      如果（ $op="向上" = $op="上传" = $op="yupload"=$up = "类= 'curr'";如果（$op="家" = $op ="编辑" = $op ="ren"= $op ="unz"）$ home = "类= 'curr'";如果（$op="cr"= $op="创建"=$cr = "类= 'curr'";如果（$op="sqlb"= $op="sqlbackup"）$sqlb = "类='curr'";如果（$op="ftpa"= $op="ftpall"）$ftpa = "类= 'curr'";
        回音"<div 类='菜单'>\n<ul><a href\'\{$meurl\op\home'><li $home><li></a>\n"
. $返回
.<a href\'\$meurl\op\up'><li $up>\</li></a>\n"
.<a href='\$meurl\？op\cr'><li $cr>\</li></a>\n"
.<a href='\$meurl\？op\sqlb'><li $sqlb>MySQL\</li></a>\n"
.<a href\'\$meurl\？op\ftpa'><lt;$ftpa ftp\</li></a>\n'
.<a href='\$meurl\？op\logout'\\gt;\lt;\lt;\lt;\n\$meurl\o\o\log'\
.</ul></div>;
    }
    回显"<div 类='内容'>\n";
}


/****************************************************************/
/* 函数登录（） */
/*                                                              */
/* = $user和 md5（$pass）*/
/* [饼干]/
/****************************************************************/

函数登录（$er=false) {
    全球$meurl，$op，$safe_num，$邮件;
    setcookie（"用户"，""，时间（）-60*60*24*1);
    setcookie（"通行证"，""，时间（）-60*60*24*1);
    主顶（"]"，假);
    如果（$er) { 
        if （isset（$ _SESSION+"错误"])){
             $_SESSION+"错误"]++;
            如果（$_SESSION= "错误"= > safe_num  &   & safe_num！ = 0){
                邮件（$邮件，'FileBox\：\！'，\文件框：\lt;br\gt;\ip\：''。$_SERVER="REMOTE_ADDR"=，"来自： <i@hezi.be>");
                回音 （'<span 类="错误">错误：\！</span>');
退出;
            }
        }还{
             $_SESSION="错误"= = 1;
        }
        回显"<span 类=错误\gt;\！\lt;/span\gt;\lt;br\gt;\n"; 
    }
    回音"<形式动作"$meurl"。 $操作."' 方法 = 'post' >\n'
."<输入类型='文本'名称='用户'边框='0'类='login_text'占位符='\'\gt;\n'
."<输入类型='密码'名称='通过'边框='0'类='login_text'占位符='\gt;\n'
."<输入类型='提交'名称='提交按钮名称'值='登录'边框='0'类='login_button按钮'>\n"
."</窗体>\n";
    主底部();
}


/****************************************************************/
/* 功能主页（） */
/*                                                              */
/* 显示文件夹内容的主函数。*/
/****************************************************************/

功能主页() {
    全局  $os，  $meurl ，$文件夹，  $ufolder;

    $内容1 = "";
    $内容2 = "";

     $文件夹= gCode（$文件夹);
    如果（opendir（$文件夹） =$样式= opendir（$文件夹）;]否则[打印机错误（"\！\ n"）; 退出;\
     $a=1; $b=1;

    如果（$文件夹）$ _SESSION= "文件夹"=$ufolder;

    主顶（"]");
    echo '<script>var order;function generateCompareTRs(iCol,sDataType,iOrder){return function compareTRs(oTR1,oTR2){vValue1=convert(oTR1.cells[iCol].getAttribute(iOrder),sDataType);vValue2=convert(oTR2.cells[iCol].getAttribute(iOrder),sDataType);order=iOrder;if(vValue1<vValue2){return -1}else{if(vValue1>vValue2){return 1}else{return 0}}}}function convert(sValue,sDataType){switch(sDataType){case"int":return parseInt(sValue);default:return sValue.toString()}}function sortTable(iOrder,iCol,sDataType){var oTable=document.getElementById("tblSort");var oTBody=oTable.tBodies[0];var colDataRows=oTBody.rows;var aTRs=new Array;for(var i=0;i<colDataRows.length;i++){aTRs[i]=colDataRows[i]}if(oTable.sortCol==iCol & iOrder==order){aTRs.reverse()}else{aTRs.sort(generateCompareTRs(iCol,sDataType,iOrder))}var oFragment=document.createDocumentFragment();for(var j=0;j<aTRs.length;j++){oFragment.appendChild(aTRs[j])}oTBody.appendChild(oFragment);oTable.sortCol=iCol;}</脚本>';
    回显"<form 方法='post'><表边框='0'单元格pad='2' 单元格间距='0' 宽度='100% 类='mytable odTable' id='tblsort'>\n';
    而（$样式表+ readdir（$样式)) {
     $ufolder =  $文件夹;
     $样式表 =  $样式表;
    如果（$os！="窗口"）：$qx = "<td>"。substr（sprintf（'%o'，文件perms（$ufolder.$样式表））， -3。"</td>" $xx="<td></td>"其他：$qx = '; $xx=';内蒂夫;
    如果（$样式表！\ "\ '&$样式表！." ) {
         $样式表= uCode（$样式表);
         $文件夹= ucode（$文件夹);
         $trontd = "<tr 宽度 = 100% onclick="st=文档.getElementbyId（$stylesheet\"\".选中;如果（s=true）=文档.getElementbyId（$stylesheet\"\"）其他 [文档. getElementbyId （"$stylesheet]） 。选中 = true; this. style. 背景颜色 ="#e3e3e5";\><td><svg 宽度='21' 高度='21'>";
         $重命名= "<td><a href='$meurl=？op_ren&file\"。html特殊字符 （$ 样式表）."&folder= $folder'><lt;/span'💽</span>'mobi'></span;/spang;</><<td\t.gt;\n;
        if （is_dir（gCode（$文件夹） 。$样式表）&&is_readable（gCode（$文件夹）。 $样式表))) {
             $内容 1=$ a= "$trontd<rect 宽度='10px' 高度='14' 样式='填充：#ffe792' 笔画 ='#e6c145"笔画宽度='0.] 5' x='4' y='4'/><rect 宽度='2px' 高度='5px' 样式='填充：#ffe792'冲程='#e6c145"冲程 - 宽度='0.5' x='13' y='13'/></svg><输入名称='select_item=d=$stylesheet {类型}'"复选框"id='$stylesheet'类='复选框主页'值={$folder}{$stylesheet}''/></td>\n
."<td _order=''1='$stylesheet='_ext='1''_time'><a href\'\'$meurl\op\home\'文件夹\{$folder\{$stylesheet\/'标题\"）。获取时间（$文件夹.$样式表）。"'>\$stylesheet\</a></td>\n"
."<td _size='1'>"。大小（dirSize（$文件夹.$样式表）。）。</td>
."<td><span 类='mobi'><lt;a href\'\$meurl\op\home\&folder\"。html特殊字符（$文件夹.$样式表）。/'>\</a><span><td>\n"
. $重命名
."<td><a href='{$folder\}{$stylesheet\'"目标='_blank'><跨度类='com'>🔍<<span class;'mob'><span class\'，'\n\'，'$folder'\
. $qx."</tr>\n";
            $a++;
             $文件夹= gCode（$文件夹);
        }elseif（！is_dir（gCode（$文件夹.$样式表）&&is_readable（gCode（$文件夹）。 $样式表))){
         $arr =爆炸（'.'，$文件夹。$样式表);
         $arr =结束（$arr);
        如果（$arr = "zip"）=#判断是否是zip文件
             $文件化 = 文件化（$ufolder.$样式表);
             $内容 2=$b= "$trontd<rect 宽度='12' 高度='10' 样式='填充：#85d3f9' 冲程='#48b8f4'笔画宽度='0.5' x='3'y='4'/><rect 宽度='12' 高度='2'样式='填充：#fc8f24'笔画='#d66e1a'笔画宽度='0.5' x='3'y='14'/><rect宽度='12'高度='2'样式="填充：#83d12a笔画"="#579714"行程 - 宽度='0.5' x='3'y='16'/><rect 宽度='2'高度='14'样式='填充：#763207'笔画='#97460b'笔画宽度='0.5' x='11'y='4'/ ></svg><输入名称='select_item=f=$stylesheet='类型='checkbox'id='$stylesheet'在财产上更改='如果（此.check=false）=本.父节点.家长节点.style.#e3e3e5";"否则[这个. 家长节点. 父节点. style. 背景颜色=';\ '类\ '复选框主页' 值\$folder\$stylesheet\
."<td _order'3\$stylesheet\'_ext'3\$arr''_time"。（文件时间（$文件夹.$样式表）=3。"'><a href\\$folder\$stylesheet'标题\"。获取时间（$文件夹.$样式表）。"'目标='_blank'>[$stylesheet]&</a></td>\n"
."<td _size="。（$文件化me=3）。"'>".大小（$文件.</td>
."<td></td>\n"
. $重命名
."<td><a href='$meurl\op\unz\amp;dename\"。html特殊字符 （$ 样式表）."&folder= $folder'><>🎁</span><span 类='mobi'><</span;g;>a</a<<>
. $qx."</tr>\n";
        }elseif（ $arr = "gif"= $arr = "jpg"= $arr = "png"= $arr = "bmp"= $arr = "png5"= $arr = "psd"= $arr = "webp"= $arr = "gz"= $arr = "gzip"){
             $文件化 = 文件化（$ufolder.$样式表);
             $内容2=$b= "$trontd<rect 宽度='10px' 高度='14' 样式='填充：#f8f9f9' 冲程='#8f9091'笔画宽度='0.5' x='4'y='4'/><rect 宽度='2px '高度='3px'样式='填充：#f8f9f9'笔画='#8f9091'笔画宽度='0.5'x='12'y='4'/><rect宽度='6'高度='5px'样式='填充：#f8f9f9'笔画='#438bd4"笔画宽度='0.5'x='6'y='8'/><rect宽度='6'高度='2px'样式='填充：#438bd4'笔画='#438bd4'笔画宽度='0.5'x='6'y=''13'/ ></svg><输入名称='select_item\f=$stylesheet='类型='check'id='$stylesheet'类='复选框主页'值=$stylesheet='$folder''
."<td _order="3=$stylesheet="_ext="3="$arr=""_time="。（文件时间（$文件夹.$样式表）=3。"\"><a href\'\$folder\$stylesheet'标题\'"。获取时间（$文件夹.$样式表）。"'目标='_blank'>[$stylesheet]&</a></td>\n"
."<td _size="。（$文件化me=3）。"\">"大小（$文件.</td>
."<td></td>\n"
. $重命名
."<td><a href='{$folder\}{$stylesheet\'"目标='_blank'><跨度类='com'>🔍<<span class;'mob'><span class\'，'\n\'，'$folder'\
. $qx."</tr>\n";
        }还{
           $文件化 = 文件化（$ufolder.$样式表);
             $内容2=$b= "$trontd<rect 宽度='10px' 高度='14' 样式='填充：#f8f9f9' 冲程 ='#8f9091'笔画宽度='0 .5' x='4' y='4'/><rect 宽度='2px' 高度='3px' 样式='填充：#f8f9f9'冲程=#8f9091 '笔画宽度='0.5' x='12' y='4'/></svg><输入名称='select_item=f=$stylesheet $stylesheet='类型''$stylesheet'id='$folder'值={$stylesheet}=''/></td>\n
."<td _order='3\$stylesheet\'_ext\'3\$arr'_time"。（文件时间（$文件夹.$样式表）=3。"'><a href\\$folder\$stylesheet'标题\"。获取时间（$文件夹.$样式表）。"'目标='_blank'>[$stylesheet]&</a></td>\n"
."<td _size="。（$文件化me=3）。"'>".大小（文件大小（$ufolder.$样式表））。</td>
."<td><a href='$meurl\op\编辑\和\fename\"。html特殊字符 （$ 样式表）."&folder=$folder'><>📝</span><span 类='mobi'><</samp;>a</a<<\t;<t;t<g;<t.t;'t;'t;td>\n
. $重命名
."<td><a href='{$folder\}{$stylesheet\'"目标='_blank'><跨度类='com'>🔍<<span class;'mob'><span class\'，'\n\'，'$folder'\
. $qx."</tr>\n";
        }
        $B++;
         $文件夹= gCode（$文件夹);
    }
    } 
}
    闭合器 （$样式);

     $lu =爆炸（'/'、  $ _SESSION= "文件夹"]);
    array_pop（$lu);
    $美国 = '';
    回显"<div 类="标题">';
    foreach （$lu 作为  $v) {
         $u =  $u. $v.'/';
        如果（$v='.'）[$v= '' ;\elseif（$v='）= $v="= ";}
        回音"<a href="。 $meurl."？op =home&folder="。 $u.">". $v.'</a>;
    }
    回声"\n"
."<span 类='右'>"$a-1，"="，$b-1，"</span></div>"
.<div 样式='位置：固定;底部：0;左边缘：3px;'><输入类型="复选框"ID="检查"单击="检查"><输入类="按钮"名称="操作"类型="提交"值='='/> <输入类='按钮'名称='操作'类型='提交'值='输入类='按钮'名称='操作'类型="提交"在点击时确认（="="，="返回时间.zip="值='"输入"='"输入"='=<输入类='按钮'名称='操作'类型="提交"onclick="返回确认"=\"\t\"，\，\！）'值\''/><输入类型\'文本'类\'文本'stlye\'垂直对齐：文本顶部;'大小\'3'id='chmod'名称\'chmod'值\'0755'><div'gt;";

    如果（$os！="窗口"）：$qx = "<第 40 个宽度=40>=</th>\n";其他：$qx = ';内蒂夫;
    回音"<thead><span id='idCheckbox'></span><t;'tr;'头表'宽度=100%>"
."<script>函数检查（）\碰撞\文档.getElementById（'检查'）;coll=文档.getelementsbyTagname（'输入'）;如果（碰撞.检查）=对于（var i=0;i<coll . 长度;i=）=如果（coll=i=.type='复选框'）=coll=i=.check=true;coll=i=.父节点.style.#e3e3e5';\否则\for\var i=0;i<coll.length;i=）\if）（科尔\i\.type\'复选框'）\coll\i\.check\false\false;col\i\.家长节点.家长节点.style.背景颜色\;\;\</脚本>"
."<第 th 宽度=20px></th>\n"
."<th 样式='宽度：计算（100% - 225px）;"><div 类="移动"><span onclick="排序表（'_order'，1）;">></span><b>/</</b</b> <span onclick="排序表（'_ext'，1）;"><b>/<//b></span><span 点击\"排序表（'_time'，1，'int'）;\"></span></div></th>\n"
."<第 th 宽度=65px><span onclick="排序表（'_size'，2，'int'）;\">\</span></th>\n"
."<th 类='开放'><span 类="mobi"></span></th>\ n"
."<th 类='重命名'><span 类\'mob''\gt;</span></th>\n'
."<th 类='开放'><span 类\"mobi'></span></th>\n"
. $qx
.</tr></thead><tbody>";
    如果（$ _SESSION="文件夹"=！\"." 和 $ _SESSION="文件夹"=！"/"){
         $最后= （子_SESSION="文件夹"=，0，1='/'）？爆炸（'/'，子_SESSION =[文件夹'，1，-1））：爆炸（'/'，子_SESSION=[文件夹'，2，-1));
         $回= （子_SESSION= "文件夹"=，0，1='/'）？''：子_SESSION（$+[文件夹']，0，1);
        array_pop（$最后);
        foreach （$最后作为  $值) {
           $回  = $返回。'/'。 $值;
        }
        如果（$os="窗口"）$qx=""否则  $qx="<td></td>";
        回显"<tr 宽度=100%><td></td><t;\"_order 1="1="1="_ext 1="_time 1="1="&1=">&a href="[$meurl=op=home&folder="。 $回来。"/"."'>\</a></td><td\"_size\"1\"></td><t;td> </td><td></td><td><td>$xx</tr>";
    }
（$ a=1; $a<计数（$内容 1） =1; $a+）如果（！空（$内容1）回显 $内容 1+$a];
用于 （$b=1; $b<计数（$内容 2） =1; $b+）回声  $ 内容2=$b];
      回音"</tbody></窗体>";

    回音"</表>";
    主底部();
}

函数gettime（$文件名）= 返回"=："日期（"Y-m-d H：i：s"，文件时间（$文件名））。"\n"。"]："日期（"Y- m -d H：i：s"，文件时间（$文件名));}
函数uCode（$文本） =返回mb_convert_encoding （$文本，"UTF-8"、"GBK");}
函数 gCode（$文本） =返回mb_convert_encoding（$文本，"GBK"，"UTF-8");}

函数 dirSize（$直接){
   $dir_size=0;
    如果（$ dir_handle= opendir（$直接))
    	{
    		而（$文件名+readdir（$ dir_handle)){
    			 $子文件= $直接 。DIRECTORY_SEPARATOR. $文件名;
    			如果（ $文件名 ='. '= $文件名='. '){
    				继续;
    			}elseif （is_dir（$子文件))
    			{
    				 $dir_size=dirSize（$子文件);
    			}elseif （is_file（$子文件)){
    				 $dir_size+文件大小（$子文件);
    			}
    		}
    		闭合器（$ dir_handle);
    	}
    退货（$ dir_size);
}
计算文件大小的函数
函数大小（$大小) { 
    $sz = [kmgtp];
    $因子+楼层（（/ 条纹（$大小） - 1） / 3);
   返回（$大小>=1024）？sprintf（"%.2f"，  $大小/ pow（1024，  $因子）。[$sz[$因子]：$大小;
} 

函数curl_get_contents（$url)   
{   
     $ch = curl_init();   
    curl_setopt（$ch， CURLOPT_URL，  $url); 
    curl_setopt（$ch， CURLOPT_TIMEOUT， 60);
    curl_setopt（$ch，CURLOPT_FOLLOWLOCATION，1);
    curl_setopt（$ch， CURLOPT_RETURNTRANSFER， 1);
     $r = curl_exec（$ch);   
    curl_close（$ch);   
    返回  $r;   
}

/****************************************************************/
/* 功能向上（） */
/*                                                              */
/* 上传的第一步。*/
/* 用户输入文件并提交文件上传（） */
/****************************************************************/

功能向上() {
    全局  $meurl，  $文件夹;
    主顶（"]");

    回音"<FORM ENCTYPE='多部分/表单数据'行动=$meurl=op=上传"方法='Post'>\n'
."<div 类='标题'>=最大值："。"ini_get（"upload_max_filesize"）。"，"。ini_get（"max_file_uploads"）。{</div><div 类\'框'样式='边界底部：0;'><输入类型="文件"名称='upfile='多个大小='30'>\n'
."</div><输入类型='文本'名称='ndir'样式='宽度：calc（100% - 12px）;边距：0;'值="。 $_SESSION="文件夹"= 。"'类='上传'>\n";

    回显"<div 类='右'><输入类型='复选框'名称='取消zip'ID='取消zip'值='checkbox'onclick='UpCheck）'选中> <标签为\'unzip'><</labal> "
."<输入类型='复选框'名称='delzip'id='deluzip'值='checkbox'><<abbr标题\''\
."<输入类型='提交'值=''类''按钮'><div><br><br><<<<br;br>\ n"
.<script>功能 UpCheck（） =如果（文档.getElementbyId（'unzip'）.检查）=文档.getElementbyId（'deluzip'.禁用\false\else\文档\文档\getElementById（'deluzip'）. 禁用\true\n;\/\script\gt;"
."</窗体>\n";
    回显"<div 类='标题'>\</div><div 类\'框'样式='边界底部：0;'{gt;？<br\gt;\<br>[Ssh]Wget，]，<br><窗体操作$meurl=op=yupload'方法='POST'>'
."</div><输入类型='文本'类='文本'样式='宽度：100% - 12px）;边距：0;'名称='ndir'值="。 $_SESSION="文件夹"= 。'><文本区域名称\'url'占位符\'
."<div 类='右'><输入类型='复选框'名称='unzip'ID='un'值='checkbox'onclick='Check）'选中>& lt;标签为\'un'><abbr标题\\（\）\'>\</abbr></labal> "
."<输入类型='复选框'名称='delzip'id='del'value''checkbox'><标签为\'del'><abb;abb;'gt;\\gt;\lt;/abbr\gt;\lt;//labal> <输入名称='提交'值=''类型='提交'类='按钮'/></div>\n"
.<script>函数检查（）\如果（文档.getElementbyId（'un'）.检查）=文档.getElementbyId（'del'）.禁用\false\else\文档.getElementbyId（'del'） 禁用\true\&</script>"
.</窗体>;

    主底部();
}


/****************************************************************/
/* 函数 yupload （） */
/*                                                              */
/* wget 文件中的第二步。*/
/* 将文件保存到磁盘。*/
/* $upfile（） 作为上传的文件。*/
/****************************************************************/

函数yupload（$url，  $文件夹，  $解压缩，  $delzip) {
	全球  $meurl;
    如果（空）$文件夹)){
    	 $文件夹="./";
    }
     $nfolder =  $文件夹;
     $nurl =  $url;
     $url = gcode（$url);
     $文件夹= gCode（$文件夹);
    如果（$网址！""){
    	ignore_user_abort（真实）;// |
        set_time_limit （24 * 60 * 60）;//
  	    如果（！file_exists（$文件夹)){
    	    mkdir（$文件夹， 0755);
        }
     $newfname =  $文件夹。基名（$url）/\/\
    if（function_exists（'curl_init')){
    	   $文件= curl_get_contents（$url）;file_put_contents（$newfname，$文件);
    }还{
         $文件=fopen（$url，"rb");
        如果（$文件）=$newf = fopen （$newfname "wb");
        if($newf)while (!feof($file)) {fwrite($newf, fread($file, 1024 * 8), 1024 * 8);}}
        if($file)fclose($file);
        if($newf)fclose($newf);
    }
    maintop("远程上传");
    echo "<div class='title'>文件 ".basename($url)." 上传成功<br></div><div class='box'>\n";
    $end = explode('.', basename($url));
    if((end($end)=="zip") && isset($unzip) && $unzip == "checkbox"){
        if(class_exists('ZipArchive')){
          echo "您可以 <a href='{$meurl}?op=home&folder=".$folder."'>访问文件夹</a> 或者 <a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>返回目录</a>  或者 <a href='{$meurl}?op=up'>继续上传</a>\n";
          echo "</div><textarea rows=15 disabled>";
            $zip = new ZipArchive();
            if ($zip->open($folder.basename($url)) === TRUE) {
                if($zip->extractTo($folder)){
                for($i = 0; $i < $zip->numFiles; $i++) {
                    echo "Unzip:".$zip->getNameIndex($i)."\n";
                }
                $zip->close();
            }else{
            	echo('<span class="error">Error:'.$nfolder.$ndename.'</span>');
            }
                echo basename($nurl)." 已经被解压到 $nfolder\n";
                if(isset($delzip) && $delzip == "checkbox"){
            	    if(unlink($folder.basename($url))){
            	        echo basename($url)." 删除成功\n";
                    }else{
            	        echo basename($url)." 删除失败\n";
                }
                }
            }else{
                echo('<span class="error">无法解压文件：'.$nfolder.basename($nurl).'</span>');
            }
            echo '</textarea>';
        }else{
        	echo('<span class="error">此服务器上的PHP不支持ZipArchive，无法解压文件！</span></div>');
        }
    }else{
    	echo "您可以 <a href='{$meurl}?op=home&folder={$nfolder}'>访问文件夹</a> 或者 <a href='{$meurl}?op=edit&fename=".basename($url)."&folder={$nfolder}'>编辑文件</a> 或者 <a href='{$meurl}?op=home&folder={$_SESSION['folder']}'>返回目录</a>  或者 <a href='{$meurl}?op=up'>继续上传</a>\n</div>";
    }
    mainbottom();
    return true;
    }else{
	    printerror ('文件地址不能为空。');
    }
}


/****************************************************************/
/* function upload()                                            */
/*                                                              */
/* Second step in upload.                                       */
/* 将文件保存到磁盘中                                           */
/* Recieves $upfile from up() as the uploaded file.             */
/****************************************************************/

function upload($upfile,$ndir,$unzip,$delzip) {
    global $meurl, $folder;
    if(empty($ndir)){
    	$ndir="./";
    }
    $nfolder = $folder;
    $nndir = $ndir;
    $ndir = gCode($ndir);
    if (!$upfile) {
        printerror("您没有选择文件！");
        exit;
    }elseif($upfile) { 
  	    maintop("上传");
  	if (!file_exists($ndir)){
    	mkdir($ndir, 0755);
    }
    $i = 1;
    echo "<div class='box'>您可以 <a href='{$meurl}?op=home&folder=".$ndir."'>前往文件所上传到的目录</a> 或者 <a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>返回目录</a> 或者 <a href='{$meurl}?op=up'>继续上传</a></div>\n";
    echo '<textarea rows=15 disabled>';
    while (count($upfile['name']) >= $i){
    	$dir = gCode($nndir.$upfile['name'][$i-1]);
        if(copy($upfile['tmp_name'][$i-1],$dir)) {
            echo "文件 ".$nndir.$upfile['name'][$i-1]." 上传成功\n";
            $end = explode('.', $upfile['name'][$i-1]);
            if((end($end)=="zip") && isset($unzip) && $unzip == "checkbox"){
            	if(class_exists('ZipArchive')){
                    $zip = new ZipArchive();
                    if ($zip->open($dir) === TRUE) {
                if($zip->extractTo($ndir)){
                for($j = 0; $j < $zip->numFiles; $j++) {
                    echo $zip->getNameIndex($j)."\n";
                }
                $zip->close();
            }
                        echo $upfile['name'][$i-1]." 已经被解压到 $nndir\n";
                        if(isset($delzip) && $delzip == "checkbox"){
            	            if(unlink($dir.$upfile['name'][$i-1])){
            	                echo $upfile['name'][$i-1]." 删除成功\n";
                            }else{
                                echo $upfile['name'][$i-1].(" 删除失败！\n");
                            }
                        }
                    }else{
                        echo("无法解压文件：".$nndir.$upfile['name'][$i-1]."\n");
                    }
                }else{
            	    echo("此服务器上的PHP不支持ZipArchive，无法解压文件！\n");
                }
            }
        }else{
            echo("文件 ".$upfile['name'][$i-1]." 上传失败\n");
        }
        $i++;
    }
        echo '</textarea>';
        mainbottom();
    }else{
        printerror("您没有选择文件！");
    }
}

/****************************************************************/
/* function unz()                                               */
/*                                                              */
/* First step in unz.                                        */
/* Prompts the user for confirmation.                           */
/* Recieves $dename and ask for deletion confirmation.          */
/****************************************************************/

function unz($dename) {
    global $meurl, $folder, $content;
    if (!$dename == "") {
        if(class_exists('ZipArchive')){
        	maintop("解压");
        	echo "<table border='0' cellpadding='2' cellspacing='0'>\n"
            ."<div class='title'>解压 ".$folder.$dename."</div>\n"
            ."<form ENCTYPE='multipart/form-data' action='{$meurl}?op=unzip'>"
            ."<input type='text' name='ndir' style='width:calc(100% - 12px);margin:0;' placeholder='解压到……' class='text' value='".$_SESSION['folder']."'>"
            ."<textarea rows=15 disabled>";
            $zip = new ZipArchive();
            if ($zip->open($folder.$dename) === TRUE) {
            	    echo 'Archive:  '.$folder.$dename.' with '.$zip->numFiles." files\n";
            		echo "Date Time            Size Name\n";
            		echo "------------         ---------------\n";
                for($i = 0; $i < $zip->numFiles; $i++) {
                	$info = $zip->statIndex($i);
                	echo date('m-d-y h:m',$info['mtime']);
                	echo '   '.$info['size'].'   ';
                    echo uCode($zip->getNameIndex($i))."\n";
                }
            		echo "------------         ---------------\n";
            		echo "Date Time            Size Name\n";
            }else{
            	     echo '文件读取失败。';
            }
            $zip->close();
            echo "</textarea>";
        echo "<input type='hidden' name='op' value='unzip'>\n"
            ."<input type='hidden' name='dename' value='".$dename."'>\n"
            ."<input type='hidden' name='folder' value='".$folder."'>\n"
            ."<div class='right'><input type='checkbox' name='del' id='del'value='del'><label for='del'>删除</label> <input type='submit' value='解压' class='button'></div>\n"
            ."</table>\n";
        mainbottom();
        }else{
            	    printerror("此服务器上的PHP不支持ZipArchive，无法解压文件！\n");
            }
    }else{
        home();
    }
}


/****************************************************************/
/* function unzip()                                            */
/*                                                              */
/* Second step in unzip.                                       */
/****************************************************************/
function unzip($dename,$ndir,$del) {
    global $meurl, $folder;
    $nndir = $ndir;
    $nfolder = $folder;
    $ndename = $dename;
    $dename = gCode($dename);
    $folder = gCode($folder);
    $ndir = gCode($ndir);
    if (!$dename == "") {
        if (!file_exists($ndir)){
    	    mkdir($ndir, 0755);
        }
        if(class_exists('ZipArchive')){
            $zip = new ZipArchive();
            if ($zip->open($folder.$dename) === TRUE) {
            	maintop("解压");
                if($zip->extractTo($ndir)){
                echo '<div class="box">现在您可以 <a href="'.$meurl.'?op=home&folder='.$_SESSION["folder"].'">返回目录</a></div>';
                echo '<textarea rows=15 disabled>';
                for($i = 0; $i < $zip->numFiles; $i++) {
                    echo uCode($zip->getNameIndex($i))."\n";
                }
                $zip->close();
                echo $dename." 已经解压完成 $nndir\n";
            }else{
            	echo('无法解压文件：'.$nfolder.$ndename);
            }
                if($del=='del'){
                	if(unlink($folder.$dename)){
                		echo $ndename." 已经被删除\n";
                	}else{
                		echo $ndename." 删除失败！\n";
                	}
                }
                echo "</textarea>\n";
                mainbottom();
            }else{
                printerror('无法解压文件：'.$nfolder.$ndename);
            }
        }else{
        	printerror('此服务器上的PHP不支持ZipArchive，无法解压文件！');
        }
    }else{
        home();
    }
}


/****************************************************************/
/* function delete()                                            */
/*                                                              */
/* Second step in delete.                                       */
/* Deletes the actual file from disk.                           */
/* Recieves $upfile from up() as the uploaded file.             */
/****************************************************************/

function deltree($pathdir)  
{  
if(is_empty_dir($pathdir))//如果是空的  
    {  
    rmdir($pathdir);//直接删除  
    }  
    else  
    {//否则读这个目录，除了.和..外  
        $d=dir($pathdir);  
        while($a=$d->read())  
        {  
        if(is_file($pathdir.'/'.$a) && ($a!='.') && ($a!='..')){unlink($pathdir.'/'.$a);}  
        //如果是文件就直接删除  
        if(is_dir($pathdir.'/'.$a) && ($a!='.') && ($a!='..'))  
        {//如果是目录  
            if(!is_empty_dir($pathdir.'/'.$a))//是否为空  
            {//如果不是，调用自身，不过是原来的路径+他下级的目录名  
            deltree($pathdir.'/'.$a);  
            }  
            if(is_empty_dir($pathdir.'/'.$a))  
            {//如果是空就直接删除  
            rmdir($pathdir.'/'.$a);
            }
        }  
        }  
        $d->close();  
    }  
}  

function is_empty_dir($pathdir){
    $d=opendir($pathdir);  
    $i=0;  
    while($a=readdir($d)){  
        $i++;  
    }  
    closedir($d);  
    if($i>2){return false;}  
    else return true;  
}


/****************************************************************/
/* function edit()                                              */
/*                                                              */
/* First step in edit.                                          */
/* Reads the file from disk and displays it to be edited.       */
/* Recieves $upfile from up() as the uploaded file.             */
/****************************************************************/

function edit($fename) {
    global $meurl,$folder;
    $file = gCode($folder.$fename);
    if (file_exists($file)) {
        maintop("编辑");
        $contents = file_get_contents($file);
        if(function_exists('mb_detect_encoding'))$encode = mb_detect_encoding($contents,array('ASCII','UTF-8','GBK','GB2312'));else $encode = 'UTF-8';
        if(htmlspecialchars($_REQUEST['encode'])){$encode = htmlspecialchars($_REQUEST['encode']);}
        if($encode!="UTF-8" && !empty($encode))$contents = mb_convert_encoding($contents,"UTF-8",$encode);
        foreach(mb_list_encodings() as $key => $value){
          if($key >= 19):
            $arr=array('EUC-CN' => 'GB2312','CP936' => 'GBK','SJIS-mac'=>'MacJapanese','SJIS-Mobile#DOCOMO'=>'SJIS-DOCOMO','SJIS-Mobile#KDDI'=>'SJIS-KDDI','SJIS-Mobile#SOFTBANK'=>'SJIS-SOFTBANK','UTF-8-Mobile#DOCOMO'=>'UTF-8-DOCOMO','UTF-8-Mobile#KDDI-B'=>'UTF-8-KDDI','UTF-8-Mobile#SOFTBANK'=>'UTF-8-SOFTBANK','ISO-2022-JP-MOBILE#KDDI'=>'ISO-2022-JP-KDDI');
            if(array_key_exists($value, $arr)) $value_text = $arr[$value]; else $value_text = $value;
          if($encode == $value) $list.="<option value='$value' selected>".$value_text.'</option>'; else $list.="<option value='$value'>".$value_text.'</option>';
          endif;
        }
        echo "<form action='{$meurl}?op=save' method='post'><div class='title'>编辑文件 {$folder}{$fename}\n"
            ."<span class='right'><select onchange=\"javascript:window.location.href=('{$meurl}?op=edit&fename=$fename&folder=$folder&encode='+this.value);\" style=\"width:70px;height:20px;padding:0;margin:0;margin-top:-2px;font-size:12px;\">"
            ."<option disabled>当前文件编码</option>".$list
            .'</select> » '
            ."<select name=\"encode\" style=\"width:70px;height:20px;padding:0;margin:0;margin-top:-2px;font-size:12px;\">"
            ."<option disabled>保存文件编码</option>".$list
            .'</select></span></div>'
            ."<textarea rows='24' name='ncontent'>"
            .htmlspecialchars($contents)
            ."</textarea>"
            ."<br>\n"
            ."<input type='hidden' name='folder' value='{$folder}'>\n"
            ."<input type='hidden' name='fename' value='{$fename}'>\n"
            ."<input type='submit' value='保存' class='right button mob'>\n"
            ."</form>\n";
        mainbottom();
    }else{
        printerror("文件不存在！");
    }
}


/****************************************************************/
/* function save()                                              */
/*                                                              */
/* Second step in edit.                                         */
/* Recieves $ncontent from edit() as the file content.          */
/* Recieves $fename from edit() as the file name to modify.     */
/****************************************************************/

function save($ncontent, $fename, $encode) {
    global $meurl,$folder;
    if (!$fename == "") {
    $file = gCode($folder.$fename);
    $ydata = $ncontent;
    if($encode!=="UTF-8" && $encode!=="ASCII")$ydata = mb_convert_encoding($ydata,$encode,"UTF-8");
    if(file_put_contents($file, $ydata) or $ncontent=="") {
        maintop("编辑");
        echo "<div class='title'>文件 <a href='{$folder}{$fename}' target='_blank'>{$folder}{$fename}</a> 保存成功！<span class='right'>$encode</span></div>\n";
        echo "<div class='box'>请选择 <a href='{$meurl}?op=home&folder={$_SESSION['folder']}'>返回目录</a> 或者 <a href='{$meurl}?op=edit&fename={$fename}&folder={$folder}'>继续编辑</a></div>\n";
        $fp = null;
        mainbottom();
    }else{
        printerror("文件保存出错！");
    }
    }else{
    home();
    }
}

/****************************************************************/
/* function cr()                                                */
/*                                                              */
/* First step in create.                                        */
/* Promts the user to a filename and file/directory switch.     */
/****************************************************************/

function cr() {
    global $meurl, $folder;
    maintop("创建");
    echo "<form action='{$meurl}?op=create' method='post'>\n"
        ."<div class='title'>创建文件 或 目录 <span class='right'><select name='isfolder' style='width:100px;height:20px;padding:0;margin:0;margin-top:-2px;font-size:12px;'><option value='0'>文件 File</option>\n"
        ."<option value='1'>文件夹 Dir</option></select></span></div><div class='box' style='border-bottom:none'><label for='nfname'>文件名：</label><input type='text' size='20' id='nfname' placeholder='请输入文件名……' name='nfname' class='text long'>\n"
        ."</div><input type='text' class='text' id='ndir' style='width:calc(100% - 12px);margin:0;' name='ndir' placeholder='目标目录……' value='".$_SESSION['folder']."'>";

    echo "<input type='hidden' name='folder' value='$folder'>\n"
        ."<input type='submit' value='创建' class='right button mob'>\n"
        ."</form>\n";
    mainbottom();
}


/****************************************************************/
/* function create()                                            */
/*                                                              */
/* Second step in create.                                       */
/* Creates the file/directoy on disk.                           */
/* Recieves $nfname from cr() as the filename.                  */
/* Recieves $infolder from cr() to determine file trpe.         */
/****************************************************************/

function create($nfname, $isfolder, $ndir) {
    global $meurl, $folder;
    if (!$nfname == "") {
        $ndir = gCode($ndir);
        $nfname = gCode($nfname);
    if ($isfolder == 1) {
        if(mkdir($ndir."/".$nfname, 0755)) {
        	$ndir = uCode($ndir);
        	$nfname = uCode($nfname);
          maintop("创建");
            echo "<div class='title'>您的目录<a href='{$meurl}?op=home&folder=./".$nfname."/'>".$ndir.$nfname."/</a> 已经成功被创建。</div><div class='box'>\n"
            ."请选择 <a href='{$meurl}?op=home&folder=".$ndir.$nfname."/'>打开文件夹</a> 或者 <a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>返回目录</a>\n";
          echo "</div>";
          mainbottom();
        }else{
        	$ndir = uCode($ndir);
        	$nfname = uCode($nfname);
            printerror("您的目录 ".$ndir.$nfname." 不能被创建。请检查您的目录权限是否已经被设置为可写 或者 目录是否已经存在</span>\n");
        }
    }else{
        if(fopen($ndir."/".$nfname, "w")) {
        	$ndir = uCode($ndir);
        	$nfname = uCode($nfname);
          maintop("创建");
            echo "<div class='title'>您的文件, <a href='{$meurl}?op=viewframe&file=".$nfname."&folder=$ndir'>".$ndir.$nfname."</a> 已经成功被创建</div><div class='box'>\n"
                ."<a href='{$meurl}?op=edit&fename=".$nfname."&folder=".$ndir."'>编辑文件</a> 或者是 <a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>返回目录</a>\n";
          echo "</div>";
          mainbottom();
        }else{
        	$ndir = uCode($ndir);
        	$nfname = uCode($nfname);
            printerror("您的文件 ".$ndir.$nfname." 不能被创建。请检查您的目录权限是否已经被设置为可写 或者 文件是否已经存在</span>\n");
        }
    }
    }else{
    cr();
    }
}


/****************************************************************/
/* function ren()                                               */
/*                                                              */
/* First step in rename.                                        */
/* Promts the user for new filename.                            */
/* Globals $file and $folder for filename.                      */
/****************************************************************/

function ren($file) {
    global $meurl,$folder,$ufolder;
    $ufile = $file;
    if (!$file == "") {
        maintop("重命名");
        echo "<form action='{$meurl}?op=rename' method='post'>\n"
            ."<div class='title'>重命名 ".$ufolder.$ufile.'</div>';
        echo "<input type='hidden' name='rename' value='".$ufile."'>\n"
            ."<input type='hidden' name='folder' value='".$ufolder."'>\n"
            ."<input class='text' type='text' style='width:calc(100% - 12px);margin:0;' placeholder='请输入文件名……' name='nrename' value='$ufile'>\n"
            ."<input type='Submit' value='重命名' class='right button mob'></form>\n";
        mainbottom();
    }else{
        home();
    }
}


/****************************************************************/
/* function renam()                                             */
/*                                                              */
/* Second step in rename.                                       */
/* Rename the specified file.                                   */
/* Recieves $rename from ren() as the old  filename.            */
/* Recieves $nrename from ren() as the new filename.            */
/****************************************************************/

function renam($rename, $nrename, $folder) {
    global $meurl,$folder;
    if (!$rename == "") {
        $loc1 = gCode("$folder".$rename); 
        $loc2 = gCode("$folder".$nrename);
        if(rename($loc1,$loc2)) {
        	maintop("重命名");
            echo "<div class='title'>文件 ".$folder.$rename." 已被重命名成 ".$folder.$nrename."</a></div>\n"
            ."<div class='box'>请选择 <a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>返回目录</a> 或者 <a href='?op=edit&fename={$nrename}&folder={$folder}'>编辑新文件</a></div>\n";
            mainbottom();
        }else{
            printerror("重命名出错！");
        }
    }else{
    home();
    }
}

/****************************************************************/
/* function movall                                              */
/*                                                              */
/* 批量移动 2014-4-12 by jooies                                 */
/****************************************************************/

function movall($file, $ndir, $folder) {
    global $meurl,$folder;
    if (!$file == "") {
        maintop("批量移动");
        $arr = str_split($ndir);
        if($arr[count($arr)-1]!=='/'){
            $ndir .= '/';
        }
        $nndir = $ndir;
        $nfolder = $folder;
    	$file = gCode($file);
    	$ndir = gCode($ndir);
    	$folder = gCode($folder);
        if (!file_exists($ndir)){
    	    mkdir($ndir, 0755);
        }
        $file = explode(',',$file);
      echo "<div class='title'>您可以 <a href='{$meurl}?op=home&folder={$nndir}'>前往文件夹查看文件</a> 或者 <a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>返回目录</a></div><textarea rows=20 disabled>";
        foreach ($file as $v) {
        if (file_exists($ndir.$v)){
        	if (rename($folder.$v, $ndir.$v."(1)")){
        		$v = uCode($v);
    	       echo $nndir.$v." 文件已存在，自动更名为 {$nndir}(1)\n";
            }else{
            	$v = uCode($v);
              echo "无法移动 ".$nfolder.$v."，请检查文件权限\n";
            }
        }elseif (rename($folder.$v, $ndir.$v)){
        	$v = uCode($v);
            echo $nfolder.$v." 已经成功移动到 ".$nndir.$v."\n";
        }else{
        	$v = uCode($v);
            echo "无法移动 ".$nfolder.$v."，请检查文件权限或文件是否存在\n";
        }
        }
    echo "</textarea>";
    mainbottom();
    }else{
    home();
    }
}

/****************************************************************/
/* function tocopy                                              */
/*                                                              */
/* 批量复制 2014-4-19 by jooies                                 */
/****************************************************************/

function tocopy($file, $ndir, $folder) {
    global $meurl,$folder;
    if (!$file == "") {
        maintop("复制");
        $nndir = $ndir;
        $nfolder = $folder;
    	  $file = gCode($file);
    	  $ndir = gCode($ndir);
    	  $folder = gCode($folder);
        if (!file_exists($ndir)){
    	    mkdir($ndir, 0755);
        }
        $file = explode(',',$file);
        echo "<div class='box'>您可以 <a href='{$meurl}?op=home&folder=".$nndir."'>前往文件夹查看文件</a> 或者 <a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>返回目录</a></div><textarea rows=20 disabled>";
        foreach ($file as $v) {
        if (file_exists($ndir.$v)){
        	if (copy($folder.$v, $ndir.$v.'(1)')){
        		  $v = iconv("GBK", "UTF-8",$v);
    	        echo "{$nndir}{$v} 文件已存在，自动更名为 {$nfolder}{$v}(1)\n";
            }else{
            	$v = iconv("GBK", "UTF-8",$v);
              echo "无法复制 {$nfolder}{$v}，请检查文件权限\n";
            }
        }elseif (copy($folder.$v, $ndir.$v)){
        	$v = iconv("GBK", "UTF-8",$v);
            echo $nfolder.$v." 已经成功复制到 ".$nndir.$v."\n";
        }else{
        	$v = iconv("GBK", "UTF-8",$v);
            echo "无法复制 ".$nfolder.$v."，请检查文件权限\n";
        }
        }
    echo "</textarea>";
    mainbottom();
    }else{
    home();
    }
}


/****************************************************************/
/* function logout()                                            */
/*                                                              */
/* Logs the user out and kills cookies                          */
/****************************************************************/

function logout() {
    global $meurl;
    setcookie("user","",time()-60*60*24*1);
    setcookie("pass","",time()-60*60*24*1);

    maintop("注销",false);
    echo "<div class='box'>注销成功！<br>"
        ."<a href={$meurl}?op=home>点击这里重新登录</a></dvi>";
    mainbottom();
}


/****************************************************************/
/* function mainbottom()                                        */
/*                                                              */
/* 页面底部的版权声明                                           */
/****************************************************************/

function mainbottom() {
    echo "</div><div style='text-align:center;font-size:13px;color:#999 !important;margin:10px 0 45px 0;font-family:Candara;'>"
        ."FileBox Version 1.10.0.1</div></body>\n"
        ."</html>\n";
    exit;
}


/****************************************************************/
/* function sqlb()                                              */
/*                                                              */
/* First step to backup sql.                                    */
/****************************************************************/

function sqlb() {
	global $meurl;
    maintop("数据库备份");
    echo "<div class='title'><span>这将进行数据库导出并压缩成mysql.zip的动作! 如存在该文件,该文件将被覆盖！</span></div><div class='box'><form action='{$meurl}?op=sqlbackup' method='POST'>\n<label for='ip'>数据库地址:  </label><input type='text' id='ip' name='ip' size='30' value='localhost' class='text'/><br><label for='sql'>数据库名称:  </label><input type='text' id='sql' name='sql' size='30' class='text'/><br><label for='username'>数据库用户:  </label><input type='text' id='username' name='username' size='30' value='root' class='text'/><br><label for='password'>数据库密码:  </label><input type='password' id='password' name='password' size='30' class='text'/><br></div><input name='submit' class='right button mob' value='备份' type='submit' /></form>\n";
    mainbottom();
}


/****************************************************************/
/* function sqlbackup()                                         */
/*                                                              */
/* Second step in backup sql.                                   */
/****************************************************************/

function sqlbackup($ip="localhost",$sql,$username="root",$password) {
	global $meurl;
    if(class_exists('ZipArchive')){
    $database=$sql;//数据库名
    $options=array(
        'hostname' => $ip,//ip地址
        'charset' => 'utf8',//编码
        'filename' => $database.'.sql',//文件名
        'username' => $username,
        'password' => $password
    );
    $mysql = mysqli_connect($options['hostname'],$options['username'],$options['password'],$database)or die(printerror("不能连接数据库：".mysqli_connect_error()));
    maintop("MySQL备份");
    mysqli_query($mysql,"SET NAMES '{$options['charset']}'");
    $tables = list_tables($database,$mysql);
    $filename = sprintf($options['filename'],$database);
    $fp = fopen($filename, 'w');
    foreach ($tables as $table) {
        dump_table($table, $fp,$mysql);
    }
    fclose($fp);
    mysqli_close($mysql);
    //压缩sql文件
        if (file_exists('mysql.zip')) {
            unlink('mysql.zip'); 
        }
        $file_name=$options['filename'];
        $zip = new ZipArchive;
        $res = $zip->open('mysql.zip', ZipArchive::CREATE);
        if ($res === TRUE) {
            $zip->addfile($file_name);
            $zip->close();
        //删除服务器上的sql文件
            unlink($file_name);
        echo '<div class="box">数据库导出并压缩完成！'
            ." <a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>返回目录</a></div>\n";
        }else{
            printerror('无法压缩文件！');
        }
    exit;
    mainbottom();
    }else{
    	printerror('此服务器上的PHP不支持ZipArchive，无法压缩文件！');
    }
}

function list_tables($database,$mysql)
{
    $rs = mysqli_query($mysql,"SHOW TABLES FROM $database");
    $tables = array();
    while ($row = mysqli_fetch_row($rs)) {
        $tables[] = $row[0];
    }
    mysqli_free_result($rs);
    return $tables;
}

//导出数据库
function dump_table($table, $fp = null,$mysql)
{
    $need_close = false;
    if (is_null($fp)) {
        $fp = fopen($table . '.sql', 'w');
        $need_close = true;
    }
$a=mysqli_query($mysql,"show create table `{$table}`");
$row=mysqli_fetch_assoc($a);fwrite($fp,$row['Create Table'].';');//导出表结构
    $rs = mysqli_query($mysql,"SELECT * FROM `{$table}`");
    while ($row = mysqli_fetch_row($rs)) {
        fwrite($fp, get_insert_sql($table, $row));
    }
    mysqli_free_result($rs);
    if ($need_close) {
        fclose($fp);
    }
}

//导出表数据
function get_insert_sql($table, $row)
{
    $sql = "INSERT INTO `{$table}` VALUES (";
    $values = array();
    foreach ($row as $value) {
        $values[] = "'" . mysql_real_escape_string($value) . "'";
    }
    $sql .= implode(', ', $values) . ");";
    return $sql;
}

/****************************************************************/
/* function ftpa()                                              */
/*                                                              */
/* First step to backup sql.                                    */
/****************************************************************/

function ftpa() {
	global $meurl;
    maintop("FTP备份");
    echo "<div class='title'>这将把文件远程上传到其他ftp！如目录存在该文件,文件将被覆盖！</div>\n<form action='{$meurl}?op=ftpall' method='POST'><div class='box'><label for='ftpip'>FTP 地址：</label><input type='text' id='ftpip' name='ftpip' size='30' class='text' value='127.0.0.1:21'/><br><label for='ftpuser'>FTP 用户：</label><input type='text' id='ftpuser' name='ftpuser' size='30' class='text'/><br><label for='ftppass'>FTP 密码：</label><input type='password' id='ftppass' name='ftppass' size='30' class='text'/><br><label type='text' for='goto'>上传目录：</label><input type='text' id='goto' name='goto' size='30' class='text' value='./htdocs/'/><br><label for='ftpfile'>上传文件：</label><input type='text' id='ftpfile' name='ftpfile' size='30' class='text' value='allbackup.zip'/></div><div class='right'><label for='del'><input type='checkbox' name='del' id='del'value='checkbox'><abbr title='FTP上传后删除本地文件'>删除</abbr></label> <input name='submit' class='button' value='远程上传' type='submit' /></div></form>\n";
    mainbottom();
}

/****************************************************************/
/* function ftpall()                                         */
/*                                                              */
/* Second step in backup sql.                                   */
/****************************************************************/

function ftpall($ftpip,$ftpuser,$ftppass,$ftpdir,$ftpfile,$del) {
	global $meurl;
	$ftpfile = gCode($ftpfile);
    $ftpip=explode(':', $ftpip);
    $ftp_server=$ftpip['0'];//服务器
    $ftp_user_name=$ftpuser;//用户名
    $ftp_user_pass=$ftppass;//密码
    if(empty($ftpip['1'])){
    	$ftp_port='21';
    }else{
    	$ftp_port=$ftpip['1'];//端口
    }
    $ftp_put_dir=$ftpdir;//上传目录
    $ffile=$ftpfile;//上传文件

    $ftp_conn_id = ftp_connect($ftp_server,$ftp_port);
    $ftp_login_result = ftp_login($ftp_conn_id, $ftp_user_name, $ftp_user_pass);

    if((!$ftp_conn_id) || (!$ftp_login_result)) {
        printerror('连接到ftp服务器失败');
        exit;
    }else{
        ftp_pasv ($ftp_conn_id,true); //返回一下模式，这句很奇怪，有些ftp服务器一定需要执行这句
        ftp_chdir($ftp_conn_id, $ftp_put_dir);
        $ffile=explode(',', $ffile);
        foreach ($ffile as $v) {
        	$ftp_upload = ftp_put($ftp_conn_id,$v,$v, FTP_BINARY);
        	if ($del == 'del') {
        		unlink('./'.$v);
        	}
        }
        ftp_close($ftp_conn_id); //断开
    }
    maintop("FTP上传");
    echo "<div class='title'>";
    $ftpfile = uCode($ftpfile);
    echo "文件 ".$ftpfile." 上传成功</div><div class='box'>\n"
        ." <a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>返回目录</a>\n";
    echo "</div>";
    mainbottom();
}


/****************************************************************/
/* function printerror()                                        */
/*                                                              */
/* 用于显示错误信息的函数                                       */
/* $error为显示的提示                                           */
/****************************************************************/

function printerror($error) {
    maintop("错误");
    echo "<div class='title'>错误信息如下：</div><div class='box'><span class='error' style='font-size:12px;'>\n".$error."\n</span> <a onclick='history.go(-1);' style='cursor:pointer;font-size:12px;'>返回上一步</a></div>";
    mainbottom();
}

/****************************************************************/
/* function deleteall()                                         */
/*                                                              */
/* 2014-3-9 Add by Jooies                                       */
/* 实现文件的批量删除功能                                       */
/****************************************************************/

function deleteall($dename) {
    if (!$dename == "") {
    	$udename = $dename;
    	$dename = gCode($dename);
        if (is_dir($dename)) {
            if(is_empty_dir($dename)){ 
                rmdir($dename);
                echo $udename." 已经被删除\n";
            }else{
                deltree($dename);
                rmdir($dename);
                echo $udename." 已经被删除\n";
            }
        }else{
            if(unlink($dename)) {
                echo $udename." 已经被删除\n";
            }else{
                echo("无法删除文件：$udename 。\n参考信息\n1.文件不存在\n2.文件正在执行\n");
            }
        }
    }
}

switch($action) {//$action 为批量操作
    case "删除":
    if(isset($_POST['select_item'])){
      maintop("删除");
      echo "<div class='box'>您可以 <a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>返回目录</a></div>\n";
      echo '<textarea rows=15 disabled>';
        if($_POST['select_item']['d']){
            foreach($_POST['select_item']['d'] as $val){
                deleteall($val);
            }
        }
        if($_POST['select_item']['f']){
            foreach($_POST['select_item']['f'] as $val){
                if(deleteall($val)){}
            }
        }
        echo '</textarea>';
        mainbottom();
    }else{
        printerror("您没有选择文件");
    }
    break;

    case "移动":
    if(isset($_POST['select_item'])){
        maintop("批量移动");
        $file = '';
        if($_POST['select_item']['d']){
            foreach($_POST['select_item']['d'] as $key => $val){
                $file = $file.$key.',';
            }
        }
        if($_POST['select_item']['f']){
            foreach($_POST['select_item']['f'] as $key => $val){
                $file = $file.$key.',';
            }
        }
        $file = substr($file,0,-1);
        echo "<form action='{$meurl}?op=movall' method='post'>";
        echo '<div class="title">移动文件</div><div class="box"><input type="hidden" name="file" value="'.$file.'"><input type="hidden" name="folder" value="'.$_SESSION['folder'].'">您将把下列文件移动到：'
            ."<input type='text' class='text' name='ndir' value='".$_SESSION['folder']."'>\n"
            ."</div><textarea rows=15 disabled>".$file."</textarea>";
        echo "<input type='submit' value='移动' border='0' class='right button mob'>\n";
        mainbottom();
    }else{
        printerror("您没有选择文件");
    }
    break;

    case "复制":
    if(isset($_POST['select_item'])){
        maintop("复制");
        $file = '';
        if($_POST['select_item']['d']){
            foreach($_POST['select_item']['d'] as $key => $val){
                $file = $file.$key.',';
            }
        }
        if($_POST['select_item']['f']){
            foreach($_POST['select_item']['f'] as $key => $val){
                $file = $file.$key.',';
            }
        }
        $file = substr($file,0,-1);
        echo "<form action='{$meurl}?op=copy' method='post'>";
        echo '<div class="title">复制文件</div><div class="box"><input type="hidden" name="file" value="'.$file.'"><input type="hidden" name="folder" value="'.$_SESSION['folder'].'">您将把下列文件复制到：'
            ."<input type='text' class='text' name='ndir' value='".$_SESSION['folder']."'>\n"
            ."</div><textarea rows=15 disabled>".$file."</textarea>";
        echo "<input type='submit' value='复制' border='0' class='right button mob'>\n";
        mainbottom();
    }else{
        printerror("您没有选择文件");
    }
    break;

    case "压缩":
    if(isset($_POST['select_item'])){
    if(class_exists('ZipArchive')){
        maintop("目录压缩");
        $time = $_SERVER['REQUEST_TIME'];
        echo "<div class='box'>您可以 <a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>查看文件夹</a> 或者 <a href='./Backup-{$time}.zip'>下载文件</a> 或者 <a href='{$meurl}?op=home'>返回目录</a></div>";
        echo '<textarea rows=15 disabled>';
        class Zipper extends ZipArchive {
            public function addDir($path) {
                if($_POST['select_item']['d']){
                    foreach($_POST['select_item']['d'] as $key => $val){
                        $val = substr($val,2);
                        $val = gCode($val);
                        $this->addDir2($val);
                    }
                }
                if($_POST['select_item']['f']){
                    foreach($_POST['select_item']['f'] as $key => $val){
                        $val = substr($val,2);
                        echo $val."\n";
                        $this->addFile($val);
                    }
                    $this->deleteName('./');
                }
            }
            public function addDir2($path) {
                $nval = iconv("GBK", "UTF-8",$path);
                echo $nval."\n";
                $this->addEmptyDir($path);
                $dr = opendir($path);
                $i=0;
                while (($file = readdir($dr)) !== false)
                {
                    if($file!=='.' && $file!=='..'){
                        $nodes[$i] = $path.'/'.$file;
                        $i++;
                    }
                }
                closedir($dr);
                foreach ($nodes as $node) {
                    $nnode = iconv("GBK", "UTF-8",$node);
                    echo $nnode . "\n";
                    if (is_dir($node)) {
                        $this->addDir2($node);
                    }elseif(is_file($node)){
                        $this->addFile($node);
                    }
                }
            }
        }
        $zip = new Zipper;
        $res = $zip->open($_SESSION['folder'].'Backup-'.$time.'.zip', ZipArchive::CREATE);
        if ($res === TRUE) {
            $f = substr($_SESSION['folder'], 0, -1);
            $zip->addDir($f);
            $zip->close();
            echo "压缩完成，文件保存为Backup-".$time.".zip</textarea>\n";
        }else{
            echo '<span class="error">压缩失败！</span>'
                ."</textarea>\n";
        }
        mainbottom();
    }else{
        printerror('此服务器上的PHP不支持ZipArchive，无法压缩文件！');
    }
    }else{
        printerror("您没有选择文件");
    }
    break;

    case "权限":
    if($os != 'windows'){
    if(isset($_POST['select_item'])){
        maintop("修改权限");
        echo "<div class='title'><a href='{$meurl}?op=home&folder=".$_SESSION['folder']."'>返回目录</a></div>\n";
        echo '<textarea rows=20 disabled>';
        $chmod = octdec(htmlentities($_REQUEST['chmod']));
        function ChmodMine($file, $chmod)
        {
            $nfile = $file;
            $file = gCode($file);
            if(is_file($file)){
                if(chmod($file, $chmod)){
                    echo '文件'.$nfile." 权限修改成功\n";
                }else{
                    echo '文件'.$nfile." 权限修改失败\n";
                }
            }elseif(is_dir($file)){
                if(chmod($file, $chmod)){
                    echo '文件夹'.$nfile." 权限修改成功\n";
                }else{
                    echo '<span class="error">文件夹'.$nfile." 权限修改失败\n";
                }
                $foldersAndFiles = scandir($file);
                $entries = array_slice($foldersAndFiles, 2);
                foreach($entries as $entry){
                    $nentry = iconv("GBK", "UTF-8",$entry);
                    ChmodMine($nfile.'/'.$nentry, $chmod);
                }
            }else{
                echo $nfile." 文件不存在！\n";
            }
        }
        if($_POST['select_item']['d']){
            foreach($_POST['select_item']['d'] as $val){
                ChmodMine($val,$chmod);
            }
        }
        if($_POST['select_item']['f']){
            foreach($_POST['select_item']['f'] as $val){
                ChmodMine($val,$chmod);
            }
        }
        echo "</textarea>";
        mainbottom();
    }else{
        printerror("您没有选择文件");
    }
    }else{printerror("Windows系统无法修改权限。");}
    break;

}

/****************************************************************/
/* function switch()                                            */
/*                                                              */
/* Switches functions.                                          */
/* Recieves $op() and switches to it                            *.
/****************************************************************/

switch($op) {
    case "home":
    home();
    break;

    case "up":
    up();
    break;

    case "yupload":
    if(!isset($_REQUEST['url'])){
    	printerror('您没有输入文件地址！');
    }elseif(isset($_REQUEST['ndir'])){
        yupload($_REQUEST['url'], $_REQUEST['ndir'], $_REQUEST['unzip'],$_REQUEST['delzip']);
    }else{
    	yupload($_REQUEST['url'], './',$_REQUEST['unzip'],$_REQUEST['delzip']);
    }
    break;

    case "upload":
    if(!isset($_FILES['upfile'])){
    	printerror('您没有选择文件！');
    }elseif(isset($_REQUEST['ndir'])){
        upload($_FILES['upfile'], $_REQUEST['ndir'], $_REQUEST['unzip'] ,$_REQUEST['delzip']);
    }else{
    	upload($_FILES['upfile'], './', $_REQUEST['unzip'] ,$_REQUEST['delzip']);
    }
    break;

    case "unz":
    unz($_REQUEST['dename']);
    break;

    case "unzip":
    unzip($_REQUEST['dename'],$_REQUEST['ndir'],$_REQUEST['del']);
    break;

    case "sqlb":
    sqlb();
    break;

    case "sqlbackup":
    sqlbackup($_POST['ip'], $_POST['sql'], $_POST['username'], $_POST['password']);
    break;

    case "ftpa":
    ftpa();
    break;

    case "ftpall":
    ftpall($_POST['ftpip'], $_POST['ftpuser'], $_POST['ftppass'], $_POST['goto'], $_POST['ftpfile'], $_POST['del']);
    break;

    case "edit":
    edit($_REQUEST['fename']);
    break;

    case "save":
    save($_REQUEST['ncontent'], $_REQUEST['fename'], $_REQUEST['encode']);
    break;

    case "cr":
    cr();
    break;

    case "create":
    create($_REQUEST['nfname'], $_REQUEST['isfolder'], $_REQUEST['ndir']);
    break;

    case "ren":
    ren($_REQUEST['file']);
    break;

    case "rename":
    renam($_REQUEST['rename'], $_REQUEST['nrename'], $folder);
    break;

    case "movall":
    movall($_REQUEST['file'], $_REQUEST['ndir'], $folder);
    break;

    case "copy":
    tocopy($_REQUEST['file'], $_REQUEST['ndir'], $folder);
    break;

    case "printerror":
    printerror($error);
    break;

    case "logout":
    logout();
    break;   

    case "z":
    z($_REQUEST['dename'],$_REQUEST['folder']);
    break;

    case "zip":
    zip($_REQUEST['dename'],$_REQUEST['folder']);
    break;

    default:
    home();
    break;
}

?>
©2020年 GitHub， Inc.
条款
隐私
安全
地位
帮助
联系 GitHub
定价
Api
培训
博客
关于
