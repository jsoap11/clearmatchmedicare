<div class="be-left-sidebar">
	<div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Blank Page</a>
		<div class="left-sidebar-spacer">
			<div class="left-sidebar-scroll">
				<div class="left-sidebar-content">
					<ul class="sidebar-elements">
						<li class="divider">Menu</li>
						<?php
						$priviliges = group_priviliges();

						foreach ($priviliges as $head_pre) :

							if (empty($head_pre->sub)) :
						?>
								<li class="<?= (uri_string() == $head_pre->url ? 'active' : '') ?>">
									<a href="<?= base_url() ?><?= $head_pre->url ?>">
										<?= $head_pre->icon ?>
										<span><?= $head_pre->perm_name ?></span></a>
								</li>
							<?php
							endif;
							if (!empty($head_pre->sub)) :
							?>
								<li class="parent"><a href="#"><?= $head_pre->icon ?> <span><?= $head_pre->perm_name ?></span></a>
									<ul class="sub-menu">
										<?php foreach ($head_pre->sub as $sub) : ?>
											<li class="<?= (uri_string() == $sub->url ? 'active' : '') ?>">
												<a href="<?= base_url() ?><?= $sub->url ?>">
													<i class="fa fa-angle-right" aria-hidden="true"></i> <?= $sub->perm_name ?>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
								</li>
						<?php
							endif;
						endforeach;
						?>
						<li class="divider">Features</li>
						<li class="">
							<a href="<?= base_url() ?>resources" target="_blank">
								<i class="icon mdi mdi-blogger"></i>Visit Blog</span></a>
						</li>
						<li class="">
							<a href="<?= base_url() ?>" target="_blank">
								<i class="icon mdi mdi-tv"></i> Front End</span>
							</a>
						</li>
						<li class="divider"></li>
						<li class="">
							<a href="<?= base_url('backoffice/auth/logout') ?>">
								<i class="icon mdi mdi-power"></i>Logout</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>