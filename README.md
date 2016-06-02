# williams-devops-website

## Milestone 2a Feedback
Your site map, content strategy and interaction flow are all sufficiently defined to give you a good start, but there are areas in your wireframe that are not addressed in your content strategy. What do you plan to feature in the expanded footer sidebars on the home page? According to your wireframes, these footer sidebars will only be visible on the desktop layout. This is easy using Bootstrap classes. But I would like to see this reflected in the content strategy.

The wireframes are detailed enough as to provide you with a guide for your front end development.

Consider combining the Content Page and the About Me page unless you plan to feature a large amount of content that would necessitate two separate pages. Plan to also include an HTML contact form somewhere in your site. This is a PWP requirement, and will be PHP driven using Swiftmailer.

I see that your documentation borrows **heavily** from my example Milestone documentation. This is only acceptable if you can adapt those design choices to achieve your specific project goals, and is not merely a shortcut around a proper planning phase.

Going back to your Milestone 1, it appears as if you intend to market yourself as a Senior Developer/Dev Ops specialist that will be direct hired by a CTO or another C-Level exec. This is a **very** specific purpose, audience, and goal that must be reflected in this design phase of your PWP. Be sure that your Milestone 1 and 2 are coherent, and ultimately suit your goals as project owner.

Your Milestone 1 and 2&alpha; pass at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You are clear to begin development on your PWP.

## Milestone 2&beta; Feedback
Your site is looking good, there are just a couple things you need to clean up! (Detailed below)

Your Milestone 2&beta; passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

### Edits &amp; Suggestions
- You need to template out your `<head>` tag into a `head-utils.php` file, that way you can just `require_once()` that file at the top of each of your pages, and avoid copy and pasting a ton of code. Talk to Rochelle or Skyler about whatever else you may need to template (such as your footer).
- Deintegrate mail form from Swiftmailer code (put them in separate files), talk to Rochelle about this and about adding the reCAPTCHA.
