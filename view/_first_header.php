<header>
  <a href=''>
    <img src='<?php echo URL_IMG_LOGO . 'header.png';?>' alt=''>
  </a>

  <div>
    <a href='<?php echo PAGE_URL_INDEX;?>'<?php echo PAGE_URL_INDEX == $active ? ' class="a"' : '';?>>Home</a>
    <a href='<?php echo URL_WORKS;?>'<?php echo URL_WORKS == $active ? ' class="a"' : '';?>>設計作品</a>
    <a href='<?php echo URL_ARTICLES;?>'<?php echo URL_ARTICLES == $active ? ' class="a"' : '';?>>知識文章</a>
    <a href='<?php echo PAGE_URL_ABOUTS;?>'<?php echo PAGE_URL_ABOUTS == $active ? ' class="a"' : '';?>>關於宙思</a>
    <a href='<?php echo PAGE_URL_CONTACTS;?>'<?php echo PAGE_URL_CONTACTS == $active ? ' class="a"' : '';?>>聯絡我們</a>
  </div>
</header>