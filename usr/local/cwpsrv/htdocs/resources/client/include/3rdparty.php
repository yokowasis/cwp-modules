<li><a href="index.php?module=installer_wordpress"><span class="icon16 icomoon-icon-arrow-right-3"></span>Wordpress Installer</a></li>
<li><a href="index.php?module=cloudflare"><span class="icon16 icomoon-icon-arrow-right-3"></span>Cloudflare</a></li>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('a:contains("FTP File Manager")').prop({
			href: 'index.php?module=ftp'
		})

		<?php 
			//----------------- CLOUDFLARE -------------------
			if (isset($_GET['module'])) {
				if ($_GET['module'] == 'list_domains') {
					?>
						$('.contentwrapper tr').each(function(index, el) {
							domain = $(this).find('td').eq(0).text();
							$(this).find('td').eq(3).find('.form-group').append('<a class="btn btn-primary btn-xs" href="https://www.cloudflare.com/a/overview/'+domain+'" target=_blank>Cloudflare</a>');
						});
					<?php
				}
			}
		?>

	});
</script>