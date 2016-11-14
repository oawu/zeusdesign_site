<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />

    <title></title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700" rel="stylesheet" type="text/css" />
<?php foreach (Min::css (
        'css/public' . CSS,
        'css/contact' . CSS
        ) as $path) { ?>
        <link href="<?php echo URL . $path;?>" rel="stylesheet" type="text/css" />
<?php } ?>

<?php foreach (Min::js  (
        'js/public' . JS
      ) as $path) { ?>
        <script src="<?php echo URL . $path;?>" language="javascript" type="text/javascript" ></script>
<?php }?>

  </head>
  <body lang="zh-tw">
    
    <div id='container'>
      <?php echo $_header;?>

      <div id='contact'>
        <header class='header'>
          <h1>聯絡我們</h1>
        </header>

        <div id='msg' class='i'>123324</div>

        <aside id='contacts'>
          <p>有設計相關問題嗎?</p>
          <p>歡迎聯繫我們。</p>
          <br/>

          <h2>公司地址</h2>
          <p>235 新北市中和區興南路一段85巷43號7樓</p>
          <p>7F., No.43, Ln. 85, Sec. 1, Xingnan Rd., Zhonghe Dist., New Taipei City 235, Taiwan(R.O.C.)</p>
          <br/>

          <h2>聯絡電話</h2>
          <p>TEL 02 2941 6737</p>
          <p>FAX 02 2941 6737</p>
          <br/>

          <h2>營業時間</h2>
          <p>週ㄧ 至 週五</p>
          <p>10:00 ~ 18:00</p>
        </aside>

        <section id='form'>
          <form method='post' action=''>
            <h2>聯絡我們</h2>

            <label for='name'>稱呼：</label>
            <input type='text' id='name' name='name' class='required' maxLength='100' value='<?php echo isset ($posts['name']) ? $posts['name'] : '';?>' placeholder='請輸入您的稱呼..'<?php echo isset ($_flash_message) && $_flash_message ? '' : ' autofocus';?> />

            <label for='email'>E-Mail：</label>
            <input type='text' id='email' name='email' class='required email' maxLength='200' value='<?php echo isset ($posts['email']) ? $posts['email'] : '';?>' placeholder='請輸入您的電子郵件信箱..' />

            <label for='message'>留言：</label>
            <textarea id='message' name='message' class='required' class='autosize' placeholder='請輸入您的建議或意見..' rows='6'><?php echo isset ($posts['message']) ? $posts['message'] : '';?></textarea>

            <button type='submit'>送出</button>
          </form>
        </section>
      </div>


      <?php echo $_footer;?>
    </div>


  </body>
</html>
