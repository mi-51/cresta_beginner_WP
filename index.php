<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(  ); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(  ); ?>
  <header>
    <div class="l-header">
      <div class="l-header__left">
        <h1><a href="#">クリ★スタ</a></h1>
      </div>
      <div class="l-header__right">
        <div class="p-hamburger-menu">
          <span class="p-hamburger-menu__line"></span>
          <span class="p-hamburger-menu__line"></span>
          <span class="p-hamburger-menu__line"></span>
        </div>
        <ul class="p-global-menu">
          <li><a href="#">About</a></li>
          <li><a href="#">Service</a></li>
          <li class="c-gmenu-list--pc"><a href="#">Contents</a></li>
          <li class="c-gmenu-list--sp"><a href="#">News</a></li>
          <li class="c-gmenu-list--sp"><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
    
    <div class="l-header__image">
      <img src="<?php echo esc_url( get_template_directory_uri(). '/img/fv-bgi_sp@2x.jpg'); ?>" alt="トップ画像">
      <h2 class="p-toptext">Create Design.</h2>
    </div>
  </header>
  
  <main>
    <div class="p-contents">
      <div class="p-contents__about">
        <h3>About</h3>
        <h4>ミニマルで<br>洗練されたデザインを。</h4>
        <p>
          近年、ミニマルなデザインが流行しています。そこで弊社では、クライアント企業様新規サービス等の課題に対してミニマルで洗練されたデザインを実現させることで解決のサポートをいたします。もちろんすべてのサービスにおいてミニマルなデザインが課題解決になるわけではないので、課題や今後のサービスの展開等をしっかりとヒアリングを行なった上でご提案させていただきます。
        </p>
      </div>
      <div class="p-contents__service">
        <h3>Service</h3>
        <div class="p-contents__service__wrap1">
          <div class="p-contents__service__description--top">  
            <h4>リリース時のサポートで<br>サービスのブランディングを</h4>
            <p>
              弊社では、リリース時もサポートさせて頂きます。プレリリース用のサイトや動画制作を通して、サービスのブランディングを行わせて頂きます。
            </p>
          </div>
          <div class="p-contents__service__image">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/img/service-image@2x.jpg'); ?>" alt="">
          </div>
        </div>

        <div class="p-contents__service__wrap2"> 
          <div class="p-contents__service__description--bottom">  
            <h4>リリース後のサポートで<br>効果を最大化させる</h4>
            <p>
              弊社では、リリース後もサポートさせて頂きます。サービスではリリース後に様々な課題にぶつかります。そこでクライアント様と一緒に改善を行うこと
            </p>
          </div>
          <div class="p-contents__service__image">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/img/service-image02@2x.jpg'); ?>" alt="">
          </div>
        </div>
      </div>
      <div class="p-contents__news">
        <h3>News</h3>
        <div class="p-wrapper">
          <div class="p-archive-card">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/img/card-image1@2x.jpg'); ?>" alt="">
            <p>新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
          </div>
          <div class="p-archive-card">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/img/card-image2@2x.jpg'); ?>" alt="">
            <p>新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
          </div>
          <div class="p-archive-card">
            <img src="<?php echo esc_url( get_template_directory_uri(). '/img/card-image3@2x.jpg'); ?>" alt="">
            <p>新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
          </div>
        </div>
      </div>
      <div class="p-contents__contact">
        <h3>お問い合わせ</h3>
        <div class="p-contact-form">
          <p>担当者名</p>
          <input type="text">
          <p>電話番号</p>
          <input type="text">
          <p>メールアドレス</p>
          <input type="text">
          <p>お問い合わせ内容</p>
          <textarea></textarea>
          <input class="p-contact-form__button" type="submit" value="送信">
        </div>
      </div>
    </div>
  </main>
  <footer>
    
  </footer>

  <?php wp_footer(  ); ?>
</body>
</html>