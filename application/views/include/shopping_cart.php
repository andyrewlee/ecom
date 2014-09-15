                        <li>
                            <a href="/carts">
                                <span class="glyphicon glyphicon-shopping-cart"></span>

                                <?php
                                $count = 0;
                                if(isset($session['cart']))
                                {
                                    foreach($session['cart'] as $value)
                                    {
                                        $count += intval($value);
                                    }
                                }
                                ?>
                                Shopping Cart (<?= $count  ?>)
                            </a>
                        </li>
