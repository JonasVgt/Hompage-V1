<!DOCTYPE html>


<style>
.inputfield {
    display: flex;
    flex-direction: column;
    text-align: left;
    padding: 5pt;
}   

.contactform {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    flex-wrap: wrap;
}

input {
    width: auto;
}

form {
    flex:1;
    max-width: 500pt;
}

#infotext{
    flex:1;
    max-width: 500pt;
    min-width: 200pt;
}


textarea{
    resize: vertical;
    max-height: 200pt;
}
</style>

<div class="contactform">


    <div id="infotext">
        <p>
            Hey! Please contact me!
        </p>

        <p>If you want to talk to me about a project or anything else, feel free to contact me over the contact-form on the right. Alternativly you can also find me on the Social Media below.<br>
        Hope to hear from You!</p>
    </div>

    <form method="POST" action="contact-form-handler.php">

        <div style="display: flex; flex-wrap: wrap;">
            <div class="inputfield" style="flex:1;" >
                <label for="fname">Name:</label>
                <input type="text" name="name" id="fname">
            </div>
            <div class="inputfield"style="flex:1">
                <label for="femaie">Email:</label>
                <input type="email" name="email" id="femail">
            </div>

        </div>
        <div>
            <div class="inputfield">
                <label for="fsubject">Subject:</label>
                <input type="text" name="subject" id="fsubject">
            </div>
            <div class="inputfield">
                <label for="ftext">Text:</label>
                <textarea  name="text" id="ftext" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div style="text-align: right;">
            <input type="submit" value="submit">
        </div>

    </form>

</div>