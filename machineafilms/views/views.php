
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="../styles.css" rel="stylesheet" />
        <title>Filmographie - Home</title>
    </head>
    <body>

        <main>
            <!--<form method="get" action="">
                <label>Liste de tous les films</label>
                <select name="pp" id="">
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
                <input type="hidden" name="p" value="<?php echo $current; ?>">
                <button class="bouton" type="submit">Appliquer</button>
                
            </form>-->
            <div id="affichage">
                <?php
                while($products = $reqProducts->fetch()){
                ?>
                <div id="case">
                    <h2><?php echo $products['titre'] ?></h2>
                        <p><?php echo $products['annee'] ?></p>
                        <!--<p><?php echo $products['description'] ?></p>-->
                        <p><?php echo $products['realisateur'] ?></p>
                </div>
                
                
                
                <?php
                }
                ?>
            </div>

            </ul>
            
        </body>
    </html>