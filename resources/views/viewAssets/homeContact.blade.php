@foreach($opost as $post)
<div class="content">
    <div class="container">
        <div class="row">
            <aside class="col-md-4">
                <div class="contact-left">
                    <div class="contact-address">
                        <h3 class="company-name">MediPal</h3>
                        <p>1603 Old York Rd,
                            <br>Houma,
                            <br>LA, 75429</p>
                        <p class="m-b-0"><strong>Phone</strong>:
                            <a href="tel:+8503867896">{{$post->phone}}</a>,

                            <br> <strong>Email</strong>: <a href="mailto:{{$post->email}}">{{$post->email}}</a>
                        </p>
                    </div>
                    <div class="working-hours">
                        <h3>Working Hours</h3>
                        <ul>
                            <li>
                                <span>Monday</span>  <b>9.00 AM To 5.00 PM</b>
                            </li>
                            <li>
                                <span>Tuesday</span>  <b>9.00 AM To 5.00 PM</b>
                            </li>
                            <li>
                                <span>Wednesday</span>  <b>9.00 AM To 5.00 PM</b>
                            </li>
                            <li>
                                <span>Thursday</span>  <b>9.00 AM To 5.00 PM</b>
                            </li>
                            <li>
                                <span>Friday</span>  <b>9.00 AM To 5.00 PM</b>
                            </li>
                            <li>
                                <span>Saturday</span>  <b>11.00 AM To 3.00 PM</b>
                            </li>
                            <li>
                                <span>Sunday</span>  <b>Closed</b>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <div class="col-md-8 map-frame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55517.97565638786!2d-90.73665650439683!3d29.57828435575776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x862104c30dc11fdd%3A0x366558737c0c7261!2sHouma%2C+LA%2C+USA!5e0!3m2!1sen!2sin!4v1514465894041"
                        height="450" allowfullscreen></iframe>
                <p class="contact-cont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta luctus
                    est interdum pretium. Fusce id tortor fringilla, suscipit turpis ac, varius
                    ex. Cras vel metus ligula. Nam enim ligula, bibendum a iaculis ut, cursus
                    id augue. Proin vitae purus id tortor vehicula scelerisque non in libero.
                    Nulla non turpis sit amet purus pharetra sollicitudin. Proin rutrum urna
                    ut suscipit ullamcorper.
                </p>
            </div>
        </div>
    </div>
</div>
@endforeach