# tenupchallenge

A WordPress theme for a front-end developer assessment.

## Process

I began with a bottom-up approach, defining the atomic parts of the design - typography, colors, imagery.
Starting with this approach allowed me to scaffold the SASS directory in a way that would extend easily with the next step.

With the basic variables and mixins setup, I broke the overall design into parts.
There is a clear header and footer, with content in three similar sections.

## Decisions

With any design there are decisions to make - especially with a single breakpoint represented. In addition to responsiveness, I took liberties with the standard interactive components - button and nav link states - and accessibility concerns.

Since the page content is simple and has a clear hierarchy, it was easy to make a quick pass at responsive behavior. Page sections remain in order, while background images give way to calls to action. Foreground images keep their order in the content to break up large groups of text, but are decreased in size to not take up too much screen space for smaller devices. Finally, content padding is adjusted for smaller devices.

Button and nav link styles were rather simple, but of course are open to discussion. All buttons and links begin white, so they can all behave similarly - I opted for subtle hover states and bright active states for a less distracting effect while browsing.

## Feedback and Questions

With a png for design, factors like font-size, line-height, and light overlays on images are difficult to determine by eye. For a first approval, I'm comfortable making my best guess at these, and asking for feedback from the designer.

1. In this case specifically, the 2nd and 3rd section both have smaller headings, which makes sense given they should be H2 tags. I defined them at 36px font size with a slightly larger line-height of 1.2 compared to 1.1 for H1 tags.

2. The 3rd section includes white text over an image, and it looks like the best practice of adding an overlay to ensure readability for any image has been followed, but it was difficult to determine what the gradient is. I stuck with a flat overlay of `background-color: rgba(0,0,0,0.3);` with a note to ask for the gradient definition.

3. There are no examples on this page, but defining styles for buttons and links on a white background seems important. My guess is they would use the main content color `#081523` and behave similarly on hover and click as existing buttons.

## Next Steps

There are several concerns to address, probably in a discussion with design.

1. Responsive font sizing: I did not adjust font sizes across breakpoints, and the H1 tag is especially large. Decreasing this could allow the hero image to remain tucked in the corner for more users.

2. Nav menu animation: I had originally added an animation on the nav menu to have it spring to life from `transform: scaleY(0)` to `transform: scaleY(1)`, but noticed that this introduced an accessibility issue - the animation requires the nav container to not be set to  `display:hidden`, and with it still rendered, I could use my keyboard to traverse the nav menu even with it "closed". I removed the animation for the final release, but with more time would add a simple script to toggle `display: hidden` before animating.

3. Hero image layout: The hero image degrades poorly on screen sizes between 768px and 1280px. I would spend a bit more time seeing if I could have it scale down with the window while still taking up as much dead space in the section as possible.

4. Icons: Ideally, clickable icons would behave the same as text links. Swapping for colored SVGs is wasteful, so I'd embed the svg directly on the page and use css vars.

5. Nav on mobile: Depending on how important the nav menu becomes, I would consider making the header sticky, with the nav stealing focus when open for ease of use on smaller devices. This would probably include an overlay to hide page content behind the menu.

## Timing

Overall, I'd estimate about 4-6 hours of time went into this exercise:

* 1 hour simply setting up the dev environment, as I have not done WordPress dev on my personal computer. Getting DDEV working via WSL2 was a fun exercise.
* 1 hour planning theme structure and scaffolding - what is a partial? Should I try to use gutenberg blocks or is that overkill? Is dart sass enough or do I need webpack?
* 2 hours building templates and corresponding SCSS
* 1 hour fine tuning to match design files, add responsiveness, and update comments where appropriate
* 30 minutes recalling what I did and writing this README