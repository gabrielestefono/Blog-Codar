<?php include_once("templates/header.php");

if(isset($_GET["id"])){
    $postid = $_GET["id"];
    $currentPost;

    foreach($posts as $post){
        if($post["id"] == $postid){
            $currentPost = $post;
        }
    }
}
?>

<main id="posts-container">
    <div class="content-container">
        <h1 class="main-title"><?= $currentPost["title"]?></h1>
        <p id="post-description"><?= $currentPost["description"]?> </p>
        <div class="img-container">
            <img src="<?=$BASE_URL?>/img/<?=$currentPost["img"]?>" alt="<?=$currentPost["title"]?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit mollitia maxime tempore hic quam quae aliquam aperiam eveniet harum praesentium explicabo dolor animi exercitationem iure ipsam nisi est, natus corporis.
            Aperiam, sed, ullam consectetur ipsam et nam, mollitia iure est aliquam natus nulla facilis explicabo culpa ex perferendis reprehenderit. In quod accusamus eum a cum esse dolorem corrupti fuga vitae.
            Dicta temporibus, sed consectetur saepe soluta fuga aliquam tempora minima sequi error ab ut totam! Mollitia natus nobis earum nulla numquam soluta quae facere cupiditate. Rerum reiciendis dicta illum ut.
            Quam nisi aliquid voluptatem molestias excepturi placeat, fugiat atque veniam quisquam maxime ea ullam tempore, doloribus pariatur quas totam earum deserunt dignissimos quibusdam in expedita! Temporibus ad magni rerum nostrum.
            Doloremque non tempore ad ducimus vitae aperiam illum incidunt culpa explicabo ipsam eveniet aliquam, perspiciatis optio repudiandae enim consectetur laboriosam repellendus ut, corporis fugit quod. Reprehenderit eius maiores culpa. Minus!
        </p>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit mollitia maxime tempore hic quam quae aliquam aperiam eveniet harum praesentium explicabo dolor animi exercitationem iure ipsam nisi est, natus corporis.
            Aperiam, sed, ullam consectetur ipsam et nam, mollitia iure est aliquam natus nulla facilis explicabo culpa ex perferendis reprehenderit. In quod accusamus eum a cum esse dolorem corrupti fuga vitae.
            Dicta temporibus, sed consectetur saepe soluta fuga aliquam tempora minima sequi error ab ut totam! Mollitia natus nobis earum nulla numquam soluta quae facere cupiditate. Rerum reiciendis dicta illum ut.
            Quam nisi aliquid voluptatem molestias excepturi placeat, fugiat atque veniam quisquam maxime ea ullam tempore, doloribus pariatur quas totam earum deserunt dignissimos quibusdam in expedita! Temporibus ad magni rerum nostrum.
            Doloremque non tempore ad ducimus vitae aperiam illum incidunt culpa explicabo ipsam eveniet aliquam, perspiciatis optio repudiandae enim consectetur laboriosam repellendus ut, corporis fugit quod. Reprehenderit eius maiores culpa. Minus!
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
            <?php foreach($currentPost["tags"] as $tag):?>
                <li><a href="#"><?= $tag?></a></li>
            <?php  endforeach;?>
        </ul>
        <h1 id="categories-title">Categorias</h1>
        <ul id="categories-list">
            <?php foreach($categories as $category):?>
                <li><a href="#"><?= $category?></a></li>
            <?php  endforeach;?>
        </ul>
    </aside>
</main>

<?php include_once("templates/footer.php");?>