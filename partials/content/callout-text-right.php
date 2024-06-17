<?php
  /**
   * Variables: 
   * background-type as text ('none', 'color', 'gradient', 'image')
   * background-image as URL (if background-type == 'image')
   * background-color-0 as text (theme color name) (if background-type == 'color' or 'gradient')
   * background-color-1 as text (theme color name) (if background-type == 'gradient')
   * eyebrow as text
   * header as text
   * description as text
   * image as URL
   * image-alt as text
   * cta-main-title as text
   * cta-main-url as URL
   * cta-secondary-title as text
   * cta-secondary-url as URL
   */

  $has_links = (
    (array_key_exists("cta-main-title", $args) && array_key_exists("cta-main-url", $args)) || 
    (array_key_exists("cta-secondary-title", $args) && array_key_exists("cta-secondary-url", $args))
  );

  $block_classes = array(
    "block",
    "callout-block",
  );

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
  <?php if ($args['background-type'] === "image" && array_key_exists("background-image", $args)): ?>
    <div class="callout-block--background">
      <img src="<?php echo esc_url($args['background-image']) ?>" />
    </div>
  <?php endif ?>
  <div class="callout-block--left">
    <?php if (array_key_exists("image", $args)): ?>
      <div class="callout-block--image">
        <img alt="<?php if (array_key_exists('image-alt', $args)) { echo esc_html($args['image-alt']); }?>" src="<?php echo esc_url($args['image']) ?>" />
      </div>
    <?php endif ?>
  </div>
  <div class="callout-block--right">
    <?php if (array_key_exists("eyebrow", $args)): ?>
    <div class="callout-block--eyebrow"><?php echo esc_html($args["eyebrow"]) ?></div>
    <?php endif ?>
    <?php if (array_key_exists("header", $args)): ?>
    <div class="callout-block--header"><?php echo esc_html($args["header"]) ?></div>
    <?php endif ?>
    <?php if (array_key_exists("description", $args)): ?>
    <div class="callout-block--description"><?php echo esc_html($args["description"]) ?></div>
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
