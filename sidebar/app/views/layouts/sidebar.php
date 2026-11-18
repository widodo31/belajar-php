<aside class="sidebar" id="sidebar">
    <div class="sidebar-brand">
        <i class="bi bi-shield-lock"></i>
        Aplikasi Menu
    </div>

    <div class="sidebar-content">
        <div class="sidebar-label">
            Menu Aplikasi
        </div>
        <ul class="sidebar-menu">
            <?php
                foreach ($menus as $menu):
                    $haschildren = !empty($menu['children']);
                    $menuId = (int) $menu['id'];
                    $menuName = htmlspecialchars(
                        $menu['nama_menu'],
                        ENT_QUOTES,
                        'UTF-8'
                    );

                    $menuUrl = htmlspecialchars(
                        $menu['url'] ?? '#',
                        ENT_QUOTES,
                        'UTF-8'
                    ); ?>


                    <?php if($haschildren) : ?>
                    <!-- Menu Induk-->
                     <li class="sidebar-item">
                        <a href="#submenu-<?= $menuId  ?>" class="sidebar-link" data-bs-toggle="collapse" role="button" aria-expanded="false">
                            <i class="<?= $menuIcon ?>"></i>
                            <span><?php $menuName ?></span>
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>

                        <!-- SUBMENU -->
                         <div class="collapse" id="submenu-<?= $menuId ?>">
                            <ul class="sidebar-submenu">
                                <?php foreach($menu['children'] as $child): ?>
                                    <li>
                                        <a href="<?= htmlspecialchars(
                                            $child['url'] ?? '#',
                                            ENT_QUOTES,
                                            'UTF-8'
                                        ) ?>">
                                            <i class="<?= htmlspecialchars(
                                                $child['icon'] ?? 'bi bi-circle',
                                                ENT_QUOTES,
                                                'UTF-8'
                                            ) ?>"></i>
                                            <?= 
                                                htmlspecialchars($child['nama-menu'], ENT_QUOTES, 'UTF-8')
                                            ?>
                                        
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                         </div>
                     </li>
                     <?php  else; ?>
                     <!-- MENU BIASA -->
                      <li class="sidebar-item">
                        <a href="<?= $menuUrl ?>" class="sidebar-link">
                            <i class="<?= $menuIcon ?>"></i>
                            <span><?= $menuName ?></span>             
                        
                        </a>
                      </li>
                    <?php endif ?>
                <?php endforeach; ?>

        </ul>
    </div>
</aside>