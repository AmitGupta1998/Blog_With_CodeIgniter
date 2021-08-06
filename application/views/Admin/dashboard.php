<?php include('header.php') ?>
<div class="container" style="margin-top: 50px;">
    <div class="row">
    <button class="btn btn-lg"><a href="#" class="btn btn-primary">Add Article</a></button> 
    </div>
</div>
    <div class="container" style="margin-top: 15px;">
    <div classa="table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Articles</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
              <?php if(count($article)): ?>  
             <?php foreach ($article as $art) :?>   
                <tr>
                    <td>1</td>
                    <td><?= $art->article_title; ?></td>
                    <td><a href="#" class="btn btn-primary" >Edit</td>
                    <td><a href="#" class="btn btn-danger">Delete</td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    </div>
    <?php include('footer.php') ?>