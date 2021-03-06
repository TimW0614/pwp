# pwp
timothymichael.org

## Milestone 1 FeedBack

Great job on Milestone 1. The projects directory structure and  HTML is perfect. You only have a very small error in your .git ignore (the I in .idea should be lower case) The epics content is perfect. I can easily picture the fictitious people you created, and  I can imagine how they would be interacting with your site. The only thing you could have gone into a little more detail was the frustrations (which could have been linked more to the goals) Feel free to start working on Milestone 2 whenever you would like.

### Grade Tier IV https://bootcamp-coders.cnm.edu/projects/personal/rubric/

## Milestone 2&alpha; Feedback
This is a good start. I'm a little concerned that there are some areas between your desktop wireframe and mobile wireframe that don't quite line up... but I'm guessing that you do have a clear idea of your layout in mind but it just isn't clearly  represented in the wireframes. Your content strategy is clear - and that's good.

Although I think these wireframes will provide you with a sufficient guide to begin  development, I do have a few questions:

- I don't see any navigation on the mobile wireframe - is this intentional? A user might want a way to jump between sections of your page - especially on mobile if there's a long scroll.
- I don't see the Technical Skills section on the mobile wireframe - is this intentional?
- I don't see the map and address/email/phone info on mobile either - intentional?
- Ideally the reCAPTCHA should be below the form, but above the send button.
- What does the "Request Resume" button below form on mobile wireframe do? Again, only on the mobile layout and not desktop layout?
- Are you planning to feature any accompanying text along with your portfolio images? Titles, descriptions, etc? If so... plan out how this will be formatted. 

Just be sure that you're clear on all aspects of your layout plans before you begin... that will make the development process easier - guaranteed!

Have a look at the [Google Maps API](https://developers.google.com/maps/web/) for your map. You would only need the Static or Embed option - whichever the simplest implementation is.

I also recommend FontAwesome for icons, and Google Fonts for custom typography. Your HTML looking great.

Your Milestone 2a passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You are clear to begin development on your PWP. You'll want to build your PWP page in the following location: `public_html/index.php`, and the next Milestone will be a mid-development checkin.

## Milestone 2b
Your Milestone 2b passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

## PWP Milestone 3 Feedback
Nice work on your PWP - this is a good start for a personal portfolio page. Your code looks great, and your project is built to spec - nice job.

Going forward, it might be beneficial to feature a bit more content about yourself and your skill set if you plan on using this project to promote yourself as a web developer. At the very least, having your LinkedIn and GitHub links a bit more prominently displayed would be a good idea - they are a bit hard to find here.  

Your contact form appears to be working well - check your email and see if you received my test message.

Your Milestone 3 passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

Your overall grade across all of your PWP Milestones is 33/40 points (82.5%).

- Milestone 1 - 20%: Tier IV 40(0.2) = 8
- Milestone 2a - 20%: Tier III 30(0.2) = 6
- Milestone 2b - 10%: Tier IV 40(0.1) = 4
- Milestone 3 - 50%: Tier III 30(0.5) = 15

### Edits &amp; Suggestions
- jQuery is loaded twice - remove either line 30 or 31.
- Very small detail here - on line 158 the `<iframe>` tag has been split up on separate lines... in other words there are some carriage returns in the tag. This is flagged as a parse error in the W3 Validator - and might potentially cause an issue in a browser. Just make sure this `<iframe>` is on one line.
- Consider reformatting your form error/success message area a bit so that it's not so wide under the form.
- The social media icons in the footer may be just a little too small...
