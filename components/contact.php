<div class="col-lg-6">
    <div class="php-email-form">
        <div class="row">
            <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>

        <div class="text-center"><button onclick="sendEmail();" type="submit">Send Message</button></div>
    </div>
</div>