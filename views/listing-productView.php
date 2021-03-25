        <main id="listing">
            <section>
                <div class="container">
                    <h1>Notre carte des thés</h1>
                </div>
                <?php foreach($type->findAll() as $type) :?>
                <div class="container">
                    <h2 id="<?=$type['name']?>"><span><?=$type['name']?></span></h2>
                    <p><?= $type['description']?></p>

                    
                    <div class="productArt">
                        <?php foreach($product->findType($type['id-type']) as $products) :?>
                        <article class="article-tea">
                            <h3><?=$products['name']?> </h3>

                            <img src="<?=$products['link-img']?>" alt="Thé blue of london">

                            <p>
                            <?=$products['description']?>
                            </p>

                            <p>
                                A partir de
                            </p>

                            <p class="price">
                            <?=$products['price']?> €
                            </p>

                            <a class="btn" href="index.php?action=product&id=<?=$products['id-product']?>">voir ce produit</a>
                        </article> 
                        <?php endforeach;?>
                    </div>
                    

                </div>
                <?php endforeach; ?>

            </section>
        </main>