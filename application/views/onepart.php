<!---
    This is the template for a page associated with an individual part.
    @author Matt
-->
<div class="row">
        <div class="text-center "><img src="/data/parts/{type}/{pic}.jpeg" title="{certificate}"/></div>
        <div class="span8 offset1">
            <br/>
            <p class="text-center">
            Associated Model: {model}<br/>
            Associated Robot Type: {line}<br/>
            Part Code: {code}<br/>
            Piece Type: {type}<br/>
            Date Acquired: {date}<br/>
            Authenticity Code: {certificate}<br/>
            <br/>
            <button onclick="location.href='/parts'" type="button" class = "btn-lg btn-primary">Back</button>
            </p><br/>
        </div>

</div>
