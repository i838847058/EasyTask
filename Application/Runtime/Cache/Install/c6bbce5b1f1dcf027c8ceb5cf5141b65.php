<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <title>安装向导 - LightCMS</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <link rel="stylesheet" href="/Public/Install/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="/Public/Common/component/layui/css/layui.css">
    <script src="/Public/Install/js/jquery.js" type="text/javascript"></script>
</head>

<body scroll="no">
<div class="b">
    <div class="main">
        <div class="head">
            <div class="h_right"><a href="//www.LIGHTcms.net" target="_blank">官方网站</a><span>|</span><a
                    href="//www.LIGHTcms.net" target="_blank">交流论坛</a></div>
            <img src="/Public/Install/images/logo.png"/>
        </div>
        <div class="cont">
            <div class="c_top"></div>
            <div class="c_c">
                <div class="c_c_left">
                    <ul>
                        <li class="on listep0">1、欢迎界面</li>
                        <li class="listep1">2、阅读协议</li>
                        <li class="listep2">3、环境检测</li>
                        <li class="listep3">4、参数配置</li>
                        <li class="listep4">5、安装完成</li>
                    </ul>
                </div>
                <div class="c_c_right">

                    <div class="divstep0" style="display: none">
                        <div class="content">
                            <h2>欢迎使用LightCMS开始您的筑梦之旅</h2>
                            <div style="font-size:77px; color:#146098;text-align:center;font-weight:bold; margin-top:20%;letter-spacing:6px;">
                                LIGHTCMS
                            </div>
                            <div style="font-size:44px; color:#3c89c3;text-align:center;letter-spacing:4px;">简单&nbsp;·&nbsp;快速&nbsp;·&nbsp;稳定&nbsp;·&nbsp;开源</div>
                        </div>
                        <div class="button"><a onclick="step(1)">开始</a></div>
                    </div>

                    <!--首页说明-->
                    <div class="divstep1" style="display: none">
                        <div class="content">
                            <h2>阅读LightCMS使用协议和版权声明</h2>
                            <p>版权所有 (c) 2019，LightCMS保留所有权利。
                            <p>感谢您选择LightCMS，希望我们的努力能为您提供一个简单、强大的站点解决方案。
                            <p>
                                在您使用LightCMS建站系统前，请仔细阅读以下信息。除本协议中明确赋予用户的权利、其它权利均保留。如果您不同意以下软件使用许可协议，您不应访问本站/下载本软件，请停止访问和使用，并将其从您的电脑中删除。
                            <p>
                                作者开发LightCMS初衷是作为学习和交流之用，完全免费开源，用户可以非商业性/商业性地下载、安装、复制和散发本软件产品。也可基于本系统进行二次开发、重新演绎发布等，但务必保留本程序版权标示。
                            <p>开发者不提供任何形式的商业服务，包括但不限于：技术支持，二次开发，模板设计，插件开发等。官网社区、QQ群等交流工具也仅限用户进行技术交流，无任何商业行为。
                                经过大量的测试和修复，程序尚未发现重大问题。但限制于个人能力、时间精力等因素，不可避免的会出现各种问题。您出于自愿而使用本程序，您必须了解使用风险，开发者不提供任何形式的使用担保，也不承担任何的相关责任。
                            <p>作为使用者，您拥有使用本程序搭建网站全部内容的所有权，并独立承担这些内容的法律义务。开发者不对使用本系统构建网站的任何信息内容以及导致的任何版权纠纷和法律争议承担责任。
                            <p>用户使用本软件时，不得用于从事违反中国人民共和国相关法律的活动，LightCMS对于用户擅自使用本软件从事违法活动不承担任何责任，包括但不限于刑事责任、行政责任、民事责任等。
                                当您访问LightCMS网站/社区论坛时，请严格遵守相关规定。严禁任何人以任何形式发表违反中华人民共和国法律法规的言论。LightCMS保留删除内容，封禁账号的权利，情节严重者上报国家公安机关。
                            <p>
                                开发者（Light）拥有LightCMS的全部知识产权，包括商标和著作权。本软件只供许可协议，并非出售。只允许您在遵守本协议各项条款的情况下复制、下载、安装、使用或者以其他方式受益于本软件的功能或者知识产权。

                            <p>LightCMS遵循GPL开源协议（主题和插件除外），在遵守GPL协议、保留LightCMS版权的情况下，您可以免费使用本系统。
                            <p><strong>您一旦选择安装本程序，即被视为完全理解并接受上述声明条款!</strong>
                        </div>
                        <div class="button"><a onclick="step(2)">我同意</a> <a onclick="step(0)">上一步</a></div>

                    </div>

                    <!--环境检查-->
                    <div class="divstep2" style="display: none">
                        <div class="content">
                            <h2>检测服务器运行环境和文件权限</h2>
                            <table class="tb">
                                <tr>
                                    <th width="170"><strong>需开启的扩展</strong></th>
                                    <th width="80"><strong>要求</strong></th>
                                    <th width="400"><strong>实际状态</strong></th>
                                </tr>

                                <?php if(is_array($chkexts)): foreach($chkexts as $k=>$v): ?><tr>
                                        <td><?php echo ($k); ?> 支持</td>
                                        <td>On</td>
                                        <td>

                                            <?php if($v): ?><font color=green>[√]On</font>
                                                <?php else: ?>
                                                <font color=#B8860B>[×]Off</font><?php endif; ?>
                                            <small>(v0.1)</small>
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                            </table>

                            <table class="tb">
                                <tr>
                                    <th width="300"><strong>目录名</strong></th>
                                    <th width="212"><strong>读取权限</strong></th>
                                    <th width="212"><strong>写入权限</strong></th>
                                </tr>

                                <?php if(is_array($chkrwpath)): foreach($chkrwpath as $k=>$v): ?><tr>
                                        <td><?php echo ($v["path"]); ?></td>
                                        <td>
                                            <?php if($v.read): ?><font color=green>[√]读</font>
                                                <?php else: ?>
                                                <font color=#B8860B>[X]读</font><?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($v.write): ?><font color=green>[√]写</font>
                                                <?php else: ?>
                                                <font color=#B8860B>[X]写</font><?php endif; ?>
                                        </td>
                                    </tr><?php endforeach; endif; ?>

                            </table>


                        </div>
                        <div class="button">
                            <?php if($chkenvpass): ?><a onclick="step(3)">下一步</a>
                                <?php else: ?>
                                <font color="red">&nbsp;&nbsp;&nbsp;错误：请先修复红色 [×] 错误后刷新本页继续！</font>
                                <a class="but grey">下一步</a><?php endif; ?>
                            <a onclick="step(1)">上一步</a>
                        </div>

                    </div>

                    <!--数据库配置-->
                    <div class="divstep3" style="display: none">
                        <div class="content">
                            <h2>填写数据库配置和网站配置信息</h2>
                            <table class="tb">
                                <tr>
                                    <th colspan="2">数据库设置</th>
                                </tr>

                                <tr>
                                    <td width="120">数据库地址：</td>
                                    <td><input class="inp" name="dbhost" id="dbhost" type="text" value="127.0.0.1"
                                               tips="通常为localhost或127.0.0.1"/></td>
                                </tr>

                                <tr>
                                    <td width="120">数据库端口：</td>
                                    <td><input class="inp" name="dbport" id="dbport" type="text" value="3306"
                                               tips="通常为3306"/></td>
                                </tr>

                                <tr>
                                    <td width="120">数据库名称：</td>
                                    <td>
                                        <input class="inp" name="dbname" id="dbname" type="text" value="lightcms"
                                               tips="数据库名，如数据库已存在，将会被清空"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="120">数据库用户：</td>
                                    <td><input class="inp" name="dbuser" id="dbuser" type="text" value="root"
                                               tips="数据库用户，强烈建议使用非root用户"/></td>
                                </tr>
                                <tr>
                                    <td width="120">数据库密码：</td>
                                    <td>
                                        <div style='float:left;margin-right:3px;'><input class="inp" name="dbpass"
                                                                                         id="dbpass"
                                                                                         type="text"
                                                                                         tips="数据库用户的连接密码"/><input
                                                class="inp" name="dbprefix" type="hidden" value="LIGHT_"/></div>
                                        <div style='float:left' id='dbpwdsta'></div>
                                    </td>
                                </tr>
                            </table>

                            <table class="tb">
                                <tr>
                                    <th colspan="2">管理员设置</th>
                                </tr>

                                <tr>
                                    <td width="120">账　号：：</td>
                                    <td>
                                        <input id="admin_user" class="inp" name="admin_user" type="text" value="admin"
                                               tips="网站管理员用户名，只能输入使用英文和数字"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="120">密　码：</td>
                                    <td><input id="admin_pass" class="inp" name="admin_pass" type="text" value="admin"
                                               tips="后台管理员密码"/></td>
                                </tr>
                            </table>


                            <table class="tb">
                                <tr>
                                    <th colspan="2">网站设置</th>
                                </tr>

                                <tr>
                                    <td width="120">网站名称：</td>
                                    <td>
                                        <input class="inp" name="sitename" type="text" value="影视大全" tips="请填写您的网站名称"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="120"> 网站网址：</td>
                                    <td><input class="inp" name="siteurl" type="text" value="<?php echo ($_SERVER['HTTP_HOST']); ?>"
                                               tips="网站地址，如：http://www.LIGHTcms.net"/></td>
                                </tr>
                            </table>

                        </div>
                        <div class="button">
                            <a onclick="save()">下一步</a>
                            <a onclick="step(2)">上一步</a>
                        </div>

                    </div>

                    <!--安装完成显示-->
                    <div class="divstep4" style="display: none">
                        <div class="content">
                            <h2>恭喜您已经成功完成了LightCMS的安装</h2>
                            <br><br>
                            <div class="end" style="margin-left:80px;"><h3>恭喜,您的网站已安装完成！</h3>
                                <p>首页地址：<a href="<?php echo ($siteurl); ?>" target="_blank"><?php echo ($siteurl); ?></a>
                                    <br>后台地址：<a href="<?php echo ($siteurl); ?>/index.php/Admin"
                                                target="_blank"><?php echo ($siteurl); ?>/index.php/Admin</a>
                                    <br>用户名：admin <br>密　码：admin <br>请牢记以上信息，您可以登陆后台修改密码及网站设置。</p>
                            </div>
                        </div>
                        <div class="button"><a href="http://<?php echo ($_SERVER['REMOTE_HOST']); ?>" target="_blank">访问网站</a></div>
                    </div>

                </div>
            </div>
            <div class="c_btm"></div>
        </div>
    </div>
</div>
<script src="/Public/Common/component/layui/layui.js" type="text/javascript"></script>
<script src="/Public/Install/js/install.js" type="text/javascript"></script>
</body>
</html>