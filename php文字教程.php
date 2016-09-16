//首先建立一个php运行的根目录我是在E:下建立了localhost文件夹
//然后我又在localhost下建立了一个www文件夹作为网站根目录

//首先，下载Apache for windows 根据你电脑的位数自己选择x64或x86
//下载地址https://www.apachelounge.com/download/
//下面开始安装过程
//将下载下来的httpd-2.4.23-win64-VC14.zip中的Apache24根据需要自行选择解压位置，具体数字都是根据你下的不同版本而改变。
//配置apache
//用编辑器打开apache24/conf/httpd.conf进行如下修改
//DocumentRoot "c:/Apache24/htdocs"修改为DocumentRoot "D:\Apache24"
//<Directory "c:/Apache24/htdocs">修改为<Directory "E:\localhost\www">
//ServerRoot "c:/Apache24"修改为ServerRoot "E:\localhost\www"
//DirectoryIndex index.html后面增加index.php index.xml index.htm并且将index.php 置于最前DirectoryIndex index.php index.html index.htm index.xml
//在#LoadModule vhost_alias_module modules/mod_vhost_alias.so下面加上如下语句
//LoadModule php7_module "D:/php/php7apache2_4.dll"(双引号里加上你php中phpapache的解压位置，不同版本名称不同，我的这个文件名称是php7apache2_4.dll)
//PHPIniDir "d:/php"(括号里是你php的解压位置)
//AddType application/x-httpd-php .php .html .htm


//接下来配置php安装环境
//首先，根据自己需要下载php相应的版本，根据电脑选择x64或x86
//下载地址http://windows.php.net/download#php-7.0
//将php解压到你指定的位置，没有要求，想解压哪解压哪
//在php根目录中复制一份php.ini-development副本，并把php.ini-development副本改名为php.ini，然后用编辑器修改php.ini，接下来的步骤都是在php.ini进行的。
//将; extension_dir = "ext"修改为extension_dir = "D:\php\ext"注意，语句前的分号要去掉，这是指定php的扩展包位置，就是你php根目录中的ext文件夹位置
//在使用session功能时，我们必须配置session文件在服务器上的保存目录，否则无法使用session，
//我们需要在Windows上新建一个可读写的目录文件夹，此目录最好独立于WEB主程序目录之外，
//此处我在E:\localhost目录上建立了phpsessiontmp目录，然后在 php.ini配置文件中修改一条语句;session.save_path = "/tmp"为session.save_path = "E:\localhost\phpsessiontmp"
//将php.ini中如下语句前的分号去掉
//;extension=php_curl.dll
//;extension=php_gd2.dll
//;extension=php_mbstring.dll
//;extension=php_mysqli.dll
//;extension=php_pdo_mysql.dll
//;extension=php_pdo_odbc.dll
//;extension=php_xmlrpc.dll
//配置php的上传功能，同session一样，在使用php文件上传功能是，我们必须指定一个临时文件夹以完成上传功能
//否则文件上传功能会失败，我在E:\localhost下建立了一个phpfileuploadtmp文件夹
//在php.ini中找到;upload_tmp_dir = 修改为upload_tmp_dir = "E:\localhost\phpfileuploadtmp"
//将date.timezone = 修改为date.timezone = Asia/Shanghai
//安装完毕，开始测试
//打开cmd管理员模式
//输入D:\MyWeb\Apache24\bin\httpd.exe -k install语句（路径根据你的安装位置自行更改）将apache服务添加到系统服务中
//双击你apache的bin目录中ApacheMonitor.exe运行apache服务
//在系统服务中启用apache，根据需要可以设置为自启
//在网站根目录中新建一个index.php文件内容写
//<?php
// phpinfo();
//?>
//打开浏览器，在地址栏输入 localhost/index.php
//查看是否输出php的配置信息


//下面开始安装配置MySQL
//首先下载mysql，下载地址：http://dev.mysql.com/downloads/mysql/
//解压mysql
//复制根目录下的my-default.ini，并把副本改为my.ini
//用编辑器打开my.ini，修改的时候注意#和\的区别目录，都是根据你自己mysql解压位置来的
//将# innodb_buffer_pool_size = 128M的#去掉
//# basedir = .....改为basedir = "D:/mysql/"
//# datadir = .....改为datadir = "D:/mysql/data/"因为我用的是mysql5.7版本，后面会初始化data文件夹,所以此处不用管没有data文件夹
//# port = .....改为port = "3306"
//接着加上这两条语句
//socket = "D:/mysql/data/mysql.sock"
//log-error = "D:/mysql/data/mysql_error.log"
//将# join_buffer_size = 128M
//# sort_buffer_size = 2M
//# read_rnd_buffer_size = 2M 前的#去掉，并且将# read_rnd_buffer_size = 2M 改为read_rnd_buffer_size = 32M 
//在windows环境变量path中添加mysql的bin目录路径
//打开管理员模式的cmd
//进入你的mysql\bin目录下
//输入mysqld install命令，安装mysql服务，如果返回Service successfully installed.则表明安装成功
//接下来初始化data文件夹，还是在bin目录下输入mysqld --initialize-insecure命令
//从windows服务中打开mysql服务，根据需要可以设置自启
//创建root管理员密码：
//输入mysql -u root进入数据库
//输入SET PASSWORD = PASSWORD('你的密码')设置密码,将你的密码改为你自己要设置的密码




//最后来安装配置phpmyadmin
//下载phpmyadmin，下载地址http://www.phpmyadmin.net/
//将phpmyadmin解压到你的网站根目录,我的是E:\localhost\www
//重命名为phpmyadmin注意全是小写的
//将config.sample.inc.php 更名为 config.inc.php
//配制 config.inc.php
//修改 $cfg['Servers'][$i]['controluser'] 把前面的 //去掉,在后面写上数据库名字 如 'root'
//$cfg['Servers'][$i]['controlpass'] 把前面的// 去掉,在后面写上数据库密码,如'123'
//修改$cfg['blowfish_secret'] = '' 在后面'' 里面随便填上几个数字 '456'
//配制服务器的php.ini
//将php下的 libmcrypt.dll 复制到 C:\WINDOWS\system32
//修改php.ini
//将 ;extension=php_mcrypt.dll前的;去掉
//重启apache即可
//安装过程
//PhpMyAdmin安装包下载安装
//然后配置目录下libraries文件下的 config.default.php 文件。
//$cfg['PmaAbsoluteUri'] = 'http://localhost/phpmyadmin';
//$cfg['blowfish_secret'] = '123456';
//$cfg['DefaultLang'] = 'zh-utf-8';
//$cfg['DefaultCharset'] ='utf-8';
//$cfg['Servers'][$i]['auth_type'] = 'cookie';
//打开http://localhost/phpmyadmin检查是否安装成功