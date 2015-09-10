Google integration for Slack
===========

**Y U NO GOOGLE GOD DAMNIT?**

 

Annoying isn't it when someone asks for something before asking Google?

Let's slap him in the face with a simple but effective google search link. 

We all know LMGTFY, but I find this annoying and non-helping because of the time wasted watching the animation. A Google link is enough really. 
 
But we never really remember if it's `?q=`, `?#q=` or else, and...
 
![](https://38.media.tumblr.com/tumblr_mcbo6gmyvf1r0qoyso1_500.gif)
  
  
That's why I've written this little php script.


How To Install
==============

- Put this php file on your server
- [Create a new Slack Slash Command](https://my.slack.com/services/new/slash-commands) with whatever you want. Mine is /g for example. Make it point to your php file. Keep the POST method (or change it also in the php file). Add a description/hint if you want to.
- [Create an incoming webhook](https://my.slack.com/services/new/incoming-webhook) (we don't really care about the channel, my script uses the channel of the slash command yo) and paste the ```Webhook URL``` you'll get at the top of the php file.
- Profit

![](http://media.giphy.com/media/wZYLAGBoQpwIw/giphy.gif)
