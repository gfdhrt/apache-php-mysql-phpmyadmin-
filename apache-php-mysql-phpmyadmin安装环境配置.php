//���Ƚ���һ��php���еĸ�Ŀ¼������E:�½�����localhost�ļ���
//Ȼ��������localhost�½�����һ��www�ļ�����Ϊ��վ��Ŀ¼

//���ȣ�����Apache for windows ��������Ե�λ���Լ�ѡ��x64��x86
//���ص�ַhttps://www.apachelounge.com/download/
//���濪ʼ��װ����
//������������httpd-2.4.23-win64-VC14.zip�е�Apache24������Ҫ����ѡ���ѹλ�ã��������ֶ��Ǹ������µĲ�ͬ�汾���ı䡣
//����apache
//�ñ༭����apache24/conf/httpd.conf���������޸�
//DocumentRoot "c:/Apache24/htdocs"�޸�ΪDocumentRoot "D:\Apache24"
//<Directory "c:/Apache24/htdocs">�޸�Ϊ<Directory "D:\Apache24">
//ServerRoot "c:/Apache24"�޸�ΪServerRoot "D:\Apache24"
//DirectoryIndex index.html��������index.php index.xml index.htm���ҽ�index.php ������ǰDirectoryIndex index.php index.html index.htm index.xml
//��#LoadModule vhost_alias_module modules/mod_vhost_alias.so��������������
//LoadModule php7_module "D:/php/php7apache2_4.dll"(˫�����������php��phpapache�Ľ�ѹλ�ã��ҵ�����ļ�������php7apache2_4.dll)
//PHPIniDir "d:/php"(����������php�Ľ�ѹλ��)
//AddType application/x-httpd-php .php .html .htm


//����������php��װ����
//���ȣ������Լ���Ҫ����php��Ӧ�İ汾�����ݵ���ѡ��x64��x86
//���ص�ַhttp://windows.php.net/download#php-7.0
//��php��ѹ����ָ����λ�ã�û��Ҫ�����ѹ�Ľ�ѹ��
//��php��Ŀ¼�и���һ��php.ini-development����������php.ini-development��������Ϊphp.ini��Ȼ���ñ༭���޸�php.ini���������Ĳ��趼����php.ini���еġ�
//��; extension_dir = "ext"�޸�Ϊextension_dir = "D:\php\ext"ע�⣬���ǰ�ķֺ�Ҫȥ��������ָ��php����չ��λ�ã�������php��Ŀ¼�е�ext�ļ���λ��
//��ʹ��session����ʱ�����Ǳ�������session�ļ��ڷ������ϵı���Ŀ¼�������޷�ʹ��session��
//������Ҫ��Windows���½�һ���ɶ�д��Ŀ¼�ļ��У���Ŀ¼��ö�����WEB������Ŀ¼֮�⣬
//�˴�����E:\localhostĿ¼�Ͻ�����phpsessiontmpĿ¼��Ȼ���� php.ini�����ļ������һ�����session.save_path = "E:\localhost\phpsessiontmp"
//��php.ini���������ǰ�ķֺ�ȥ��
//;extension=php_curl.dll
//;extension=php_gd2.dll
//;extension=php_mbstring.dll
//;extension=php_mysqli.dll
//;extension=php_pdo_mysql.dll
//;extension=php_pdo_odbc.dll
//;extension=php_xmlrpc.dll
//����php���ϴ����ܣ�ͬsessionһ������ʹ��php�ļ��ϴ������ǣ����Ǳ���ָ��һ����ʱ�ļ���������ϴ�����
//�����ļ��ϴ����ܻ�ʧ�ܣ�����E:\localhost�½�����һ��phpfileuploadtmp�ļ���
//��php.ini���ҵ�;upload_tmp_dir = �޸�Ϊupload_tmp_dir = "E:\localhost\phpfileuploadtmp"
//��date.timezone = �޸�Ϊdate.timezone = Asia/Shanghai
//��װ��ϣ���ʼ����
//��cmd����Աģʽ
//����D:\MyWeb\Apache24\bin\httpd.exe -k install��䣨·��������İ�װλ�����и��ģ���apache������ӵ�ϵͳ������
//˫����apache��binĿ¼��ApacheMonitor.exe����apache����
//��ϵͳ����������apache��������Ҫ��������Ϊ����
//����վ��Ŀ¼���½�һ��index.php�ļ�����д
//<?php
// phpinfo();
//?>
//����������ڵ�ַ������ localhost/index.php
//�鿴�Ƿ����php��������Ϣ


//���濪ʼ��װ����MySQL
//��������mysql�����ص�ַ��http://dev.mysql.com/downloads/mysql/
//��ѹmysql
//���Ƹ�Ŀ¼�µ�my-default.ini�����Ѹ�����Ϊmy.ini
//�ñ༭����my.ini���޸ĵ�ʱ��ע��#��\������Ŀ¼�����Ǹ������Լ�mysql��ѹλ������
//��# innodb_buffer_pool_size = 128M��#ȥ��
//# basedir = .....��Ϊbasedir = "D:/mysql/"
//# datadir = .....��Ϊdatadir = "D:/mysql/data/"��Ϊ���õ���mysql5.7�汾��������ʼ��data�ļ���,���Դ˴����ù�û��data�ļ���
//# port = .....��Ϊport = "3306"
//���ż������������
//socket = "D:/mysql/data/mysql.sock"
//log-error = "D:/mysql/data/mysql_error.log"
//��# join_buffer_size = 128M
//# sort_buffer_size = 2M
//# read_rnd_buffer_size = 2M ǰ��#ȥ�������ҽ�# read_rnd_buffer_size = 2M ��Ϊread_rnd_buffer_size = 32M 
//��windows��������path�����mysql��binĿ¼·��
//�򿪹���Աģʽ��cmd
//�������mysql\binĿ¼��
//����mysqld install�����װmysql�����������Service successfully installed.�������װ�ɹ�
//��������ʼ��data�ļ��У�������binĿ¼������mysqld --initialize-insecure����
//��windows�����д�mysql���񣬸�����Ҫ������������
//����root����Ա���룺
//����mysql -u root�������ݿ�
//����SET PASSWORD = PASSWORD('�������')��������,����������Ϊ���Լ�Ҫ���õ�����




//�������װ����phpmyadmin
//����phpmyadmin�����ص�ַhttp://www.phpmyadmin.net/
//��phpmyadmin��ѹ�������վ��Ŀ¼,�ҵ���E:\localhost\www
//������Ϊphpmyadminע��ȫ��Сд��
//��config.sample.inc.php ����Ϊ config.inc.php
//���� config.inc.php
//�޸� $cfg['Servers'][$i]['controluser'] ��ǰ��� //ȥ��,�ں���д�����ݿ����� �� 'root'
//$cfg['Servers'][$i]['controlpass'] ��ǰ���// ȥ��,�ں���д�����ݿ�����,��'123'
//�޸�$cfg['blowfish_secret'] = '' �ں���'' ����������ϼ������� '456'
//���Ʒ�������php.ini
//��php�µ� libmcrypt.dll ���Ƶ� C:\WINDOWS\system32
//�޸�php.ini
//�� ;extension=php_mcrypt.dllǰ��;ȥ��
//����apache����
//��װ����
//PhpMyAdmin��װ�����ذ�װ
//Ȼ������Ŀ¼��libraries�ļ��µ� config.default.php �ļ���
//$cfg['PmaAbsoluteUri'] = 'http://localhost/phpmyadmin';
//$cfg['blowfish_secret'] = '123456';
//$cfg['DefaultLang'] = 'zh-utf-8';
//$cfg['DefaultCharset'] ='utf-8';
//$cfg['Servers'][$i]['auth_type'] = 'cookie';
//��http://localhost/phpmyadmin����Ƿ�װ�ɹ�