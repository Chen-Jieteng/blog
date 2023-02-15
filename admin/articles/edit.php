<?php 
include("../../path.php");
include(ROOT_PATH . "/app/controllers/users.php");
?>

<!DOCTYPE  html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            芥尘的数据仓库 - 共享技术博客
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>        
        <link rel="stylesheet" href="../../assets/css/index.css">
        <link rel="stylesheet" href="../../assets/css/login.css">
        <link rel="stylesheet" href="../../assets/css/publish.css">
    </head>
    <body>
        <!-- PHP codes -->
        
        <!-- HTML codes -->
        <div class="container-fluid">
            <?php include(ROOT_PATH . "/app/partials/publishHeader.php");?>
            <div class="main-container d-flex" style="background-color:#f7f8fa">
                <?php include(ROOT_PATH . "/app/partials/publishSidebar.php");?>  
                <div class="card" id="article-publish">
                    <h5 class="card-header">文章编辑</h5>
                    <div class="card-body">
                        <h5 class="card-title">
                            <input type="text" class="form-control" id="title" placeholder="利用IBM Watson Studio系统预测以及分析未来房价">
                            <small class="text-muted">0/20</small>
                        </h5>
                        <p class="card-text">
                            <textarea class="form-control" id="articletext" rows="3" placeholder="此刻你想给大家分享什么？"></textarea>
                        </p>
                        <a href="#" class="btn btn-primary">图片</a> 
                        <a href="#" class="btn btn-primary">话题</a> 
                        <a href="#" class="btn btn-primary">表情</a> 
                        <a href="#" class="btn btn-primary">链接</a> 
                        <a href="#" class="btn btn-primary">链接</a> 
                        <a href="#" class="btn btn-primary">发表</a> 
                        <small class="text-muted">正文字数：0/5000</small>
                        <small class="text-muted">实时保存草稿</small>
                    </div>
                </div>     
            </div>
            <?php include(ROOT_PATH . "/app/partials/footer.php");?>
        </div>
    </body>
</html>