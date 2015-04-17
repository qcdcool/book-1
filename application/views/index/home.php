<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图书管理系统</title>
    <link href="<?php echo base_url() . 'style/index/'?>css/index.css" rel="stylesheet" />
    <link href="<?php echo base_url() . 'style/index/'?>css/category.css" rel="stylesheet" />
    <?php $this->load->view('index/head.php')?>

    <div id="main">
        <div class='content'>
            <div  class='list'>
                <div class='title'>
                    <h2>最新图书..</h2>
                </div>
                <ul>
                    <?php foreach ($new as $v): ?>
                    <li>
                        <div class='post-image'>
                            <span>
                                <a href="<?php echo site_url('b/' . $v['bid'])?>"><img width="" src="<?php echo base_url() . 'uploads/' . $v['thumb']?>" /></a>
                            </span>
                        </div>
                        <div class='post-content'>
                            <a href="<?php echo site_url('b/' . $v['bid'])?>"><h3><?php echo $v['title']?></h3></a>
                            <p><?php echo mb_substr($v['info'], 0, 70)?></p>
                        </div>
                    </li>
                    <?php endforeach?>
                </ul>
            </div>
            <div  class='list'>
                <div class='title'>
                    <h2>热门图书..</h2>
                </div>
                <ul>
                    <?php foreach ($hot as $v): ?>
                    <li>
                        <div class='post-image'>
                            <span>
                                <a href="<?php echo site_url('b/' . $v['bid'])?>"><img width="" src="<?php echo base_url() . 'uploads/' . $v['thumb']?>" /></a>
                            </span>
                        </div>
                        <div class='post-content'>
                            <a href="<?php echo site_url('b/' . $v['bid'])?>"><h3><?php echo $v['title']?></h3></a>
                            <p><?php echo mb_substr($v['info'], 0, 70)?></p>
                        </div>
                    </li>
                    <?php endforeach?>

                </ul>
            </div>
        </div>
    <?php $this->load->view('index/right.php')?>
    </div>
    <?php echo $this->load->view('index/foot.php')?>


