---
layout: default
permalink: "contact"
---

<header class="site-header">
  <div class="underlay-contact">
    <div class="title-head">
      <h1 class="site-title">Contact Us</h1>
    </div>
  </div>
</header>

<div class="container">

  <h2 class="contact-title">ExPress It Promotional Products</h2>
  <h3 class="contact-excerpt">We are a small business located in Milwaukie, Oregon. We do many jobs with local Businesses, Schools and Churches. We have minumum overhead so we can keep prices low. We specialize in Screen Printing, Embroidery and Promotional Products. We also sell Stationery Products for all occasions. Contact us today for a custom quote.</h3>

  <div class="col-md-6">
    <form name="myemailform">
      <h4 class="font1" name="name">Name</h4>
      <input type="text" class="form-control">
      <br />
      <h4 class="font1" name="email">Your Email</h4>
      <input type="email" name="email" class="form-control">
      <br />
      <h4 class="font1">Message</h4>
      <textarea class="form-control" rows="3" name="message"></textarea>
      <br />
      <button class="btn btn-submit" type="submit" value="submit">Send</button>
      <button class="btn" type="reset">Reset</button>
    </form>
  </div>

  <div class="col-md-6">
    <div class="contact-info">
      <h4 class="font1">Email</h4>
      <h4 class="contact-email">{{ site.email }}</h4>
      <hr />
      <h4 class="font1">Phone</h4>
      <h4 class="contact-phone">{{ site.phone }}</h4>
      <hr />
      <h4 class="font1">Fax</h4>
      <h4 class="contact-fax">(503) 659-5164</h4>
    </div>
  </div>
</div>

<div class="map">
  {% include map.html %}
</div>
