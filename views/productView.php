        <main id="product">
        <?php $oneProduct = $product->findOne($_GET['id']); ?>
            <section>
                
                <div class="container">
                    <h1>Le meilleur du thé</h1>
                    <article>
                        <div>
                            <div>
                                <h2><?=$oneProduct['name']?></h2>
                                <h3>Thé noir à la bergamote</h3>
                                <p><?=$oneProduct['id-product']?></p>
                            </div>

                            <div>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>

                                <a href="#">Voir les 56 avis</a>
                            </div>
                        </div>

                        <div>
                            <img src="<?=$oneProduct['link-img']?>" alt="Thé Blue of London">

                            <form action="#" method="post">
                                <div>
                                    <select id="quantities" name="quantity">
                                        <option data-price="<?=$oneProduct['price']?>€" value="100">Sachet de 100 g</option>
                                    </select>
                                </div>
                                <div>
                                    <p id="price"><?=$oneProduct['price']?>€</p>
                                </div>
                                <div>
                                    <button type="button" class="btn addProduct"  data-product="<?=$oneProduct['name']?>" data-price="<?=$oneProduct['price']?>">Ajouter au panier</button>
                                </div>
                                <div>
                                    <a href="#"><i class="fas fa-heart"></i>  Ajouter à ma liste d'entrée</a>
                                </div>
                                
                            </form>
                        </div>

                        <p>
                        <?=$oneProduct['description']?>
                        </p>
                    </article>
                </div>
            </section>
        </main>
        <script src="public/js/product.js"></script>
