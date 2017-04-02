<!---
    This is the template for a page associated with an individual part.
    @author Matt
-->
<div class="row">
        <div class="span3"><img src="/data/parts/{pic}.jpeg" title="{certificate}"/></div>
        <div class="span8 offset1">
            <p class="text-right">
            Associated Model: {model}<br/>
            Associated Robot Type: {line}<br/>
            Part Code: {code}<br/>
            Piece Type: {type}<br/>
            Date Acquired: {date}<br/>
            Authenticity Code: {certificate}</p><br/>
        </div>
    <button onclick="location.href='/parts'" type="button">Back</button>
</div>
