 <?php
include "../../config.php";
session_start();
?>
 
 <li><a href="reclamation.html">reclamation</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                     </li>
                                    <li class=" d-none d-xl-block">
                                        <div class="favorit-items">
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </li>
                                    <li>
									
									<form action="../../core/Reclamation.php?action=ajouter" method="post">
                    <input type="hidden" name="userid" value="<?php echo '5'; ?>">

                    <!--$_Session => Variabl Globle contenant les information de l utilisateur connnecté-->
                    <label for="name">Nom</label>
                    <input type="text" id="name" value="<?php echo 'ramy'; ?>" required disabled>

                    <label for="email" style="margin-top: 10px;">Email</label>
                    <input type="email" id="email" value="<?php echo 'rana.righi@esprit.tn'; ?>" required disabled
                           style="margin: 0">

                    <label for="sujet" style="margin-top: 10px;">Sujet</label>
                    <input type="text" id="sujet" name="sujet" required>

                    <textarea type="text" name="description" minlength="5" required></textarea>
                    <input type="submit" value="Submit Now">
                </form>