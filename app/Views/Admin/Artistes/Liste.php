   <h1> <?php    echo $page_title;?></h1>
   <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <!-- invoice list -->
                    <section class="invoice-list-wrapper section">
                        <!-- create invoice button-->
                        <!-- Options and filter dropdown button-->
                      
                        <!-- create invoice button-->
                        <div class="invoice-create-btn">
                            <a href=<?= base_url('admin/artistes/edit/')?> class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                                <i class="material-icons">add</i>
                                <span class="hide-on-small-only">Create User</span>
                            </a>
                        </div>
                 
                        <div class="responsive-table">
                            <table class="table invoice-data-table white border-radius-4 pt-1">
                                <thead>
                                    <tr>
                                        <!-- data table responsive icons -->
                                        <th></th>
                                        <!-- data table checkbox -->
                                        <th></th>
                                        
                                        <th>Id</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Annee naissance</th>
                                        <th>Nombres de film</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php if(isset($tableArtistes)):
                                            foreach($tableArtistes as $artiste):?>
                                                <tr>
                                                    <td></td>
                                                    <td></td>                                      
                                                    <td><span class="invoice-amount"><?= $artiste["id"] ?></span></td>
                                                    <td><span class="invoice-amount"><?= $artiste["nom"] ?></span></td>
                                                    <td><span class="invoice-customer"><?= $artiste["prenom"] ?></span></td>
                                                    <td><span class="invoice-amount"><?= $artiste["annee_naissance"] ?></span></td>
                                                    <td><small> 5</small></td>
                                                    <?php if($artiste["image"]){ ?>
                                                        <td><img src=<?="/app-assets/images/min/".$artiste["image"]?> alt="mon image" class="circle" /></td>
                                                    <?php }else{ ?>
                                                        <td><img src=<?="/app-assets/images/default.jpg"?> alt="mon image" class="circle" /></td>
                                                    <?php } ?>

                                                    <td>
                                                        <div class="invoice-action">
                                                            <a href=<?= base_url("admin/artistes/edit/".$artiste["id"]) ?> class="invoice-action-edit">
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                            <?php if(!empty($_GET['page'])){ ?>
                                                            <a href=<?= base_url("admin/artistes/delete/".$artiste["id"]."/".$_GET['page']) ?> class="invoice-action-view mr-4">
                                                                <i class="material-icons">delete_sweep</i>
                                                            </a>
                                                            <?php }else{?>
                                                                <a href=<?= base_url("admin/artistes/delete/".$artiste["id"]) ?> class="invoice-action-view mr-4">
                                                                <i class="material-icons">delete_sweep</i>
                                                            </a>
                                                        <?php } ?>
                                                        </div>
                                                    </td>
                                                </tr>                                                                                                         
                                            <?php endforeach;
                                        endif;?>
                                </tbody>
                            </table>
                             <?= $pager->links() ;?>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>               