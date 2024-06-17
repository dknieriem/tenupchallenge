<?php
  /**
   * Centered callout variant. Note: This template does not include a foreground image, as the centered
   * content requires a background image
   * 
   * Variables: 
   * background-type as text ('none', 'color', 'gradient', 'image')
   * background-image as URL (if background-type == 'image')
   * background-color-0 as text (theme color name) (if background-type == 'color' or 'gradient')
   * background-color-1 as text (theme color name) (if background-type == 'gradient')
   * eyebrow as text
   * header as text
   * description as text
   * -image as URL- (excluded)
   * -image-alt as text- (excluded)
   * -image-style as text- (excluded)
   * cta-main-title as text
   * cta-main-url as URL
   * cta-secondary-title as text
   * cta-secondary-url as URL
   * classes as array(text)
   */


  $has_links = (
    (array_key_exists("cta-main-title", $args) && array_key_exists("cta-main-url", $args)) || 
    (array_key_exists("cta-secondary-title", $args) && array_key_exists("cta-secondary-url", $args))
  );

  $block_classes = array(
    "block",
    "callout-block",
    "callout-block--center",
  );

  if(array_key_exists('classes', $args) && is_array($args['classes'])){
    $block_classes = array_merge($block_classes, $args['classes']);
  }

  if($args['background-type'] == 'gradient' && 
  array_key_exists('background-color-0', $args) && 
  array_key_exists('background-color-1', $args)) {
    $block_classes = array_merge($block_classes, array(
      "gradient", 
      "gradient-from-" . esc_url($args['background-color-0']),
      "gradient-to-" . esc_url($args['background-color-1']),
    ));
  }
?>

<div class="<?php echo implode(' ', $block_classes) ?>">
  <?php if (array_key_exists('background-type', $args) && $args['background-type'] === "image" && array_key_exists("background-image", $args)): ?>
    <div class="callout-block--background" style="background-image: url('<?php echo esc_url($args["background-image"]) ?>' );">
      <!--<img src="<?php echo esc_url($args['background-image']) ?>" />-->
    </div>
  <?php endif ?>
  <div class="callout-block--container">
    <div class="container--center">
      <?php if (array_key_exists("eyebrow", $args)): ?>
      <p class="callout-block--eyebrow"><?php echo esc_html($args["eyebrow"]) ?></p>
      <?php endif ?>
      <?php if (array_key_exists("header", $args)): ?>
        <?php if(array_key_exists('classes', $args) && is_array($args['classes']) &&
          in_array('hero-home', $args['classes'])): ?>
      <h1 class="callout-block--header"><?php echo esc_html($args["header"]) ?></h1>
      <?php else: ?>
      <h2 class="callout-block--header"><?php echo esc_html($args["header"]) ?></h2>
      <?php endif ?>
      <?php endif ?>
      <?php if (array_key_exists("description", $args)): ?>
      <p class="callout-block--description"><?php echo esc_html($args["description"]) ?></p>
      <?php endif ?>
      <?php if ($has_links): ?>
      <div class="callout-block--ctas">
        <?php if (array_key_exists("cta-main-title", $args) && array_key_exists("cta-main-url", $args)): ?>
          <a class="button--primary" href="<?php echo esc_url($args['cta-main-url']) ?>"><?php echo esc_html($args["cta-main-title"]) ?></a>
        <?php endif ?>    
        <?php if (array_key_exists("cta-secondary-title", $args) && array_key_exists("cta-secondary-url", $args)): ?>
          <a class="button--secondary" href="<?php echo esc_url($args['cta-secondary-url']) ?>"><?php echo esc_html($args["cta-secondary-title"]) ?></a>
        <?php endif ?>   
      </div>
      <?php endif ?>
    </div>
  </div>
</div>
