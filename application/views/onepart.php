<!---
    This is the template for a page associated with an individual part. At the moment, only one part actually goes here
    as a sample of how this would actually work.
    @author Matt
-->
<div class="row">
    <div class="span3"><img src="/data/parts/{part_code}" title="{certificate}"/></div>
    <div class="span8 offset1">
        <p class="text-right">
        Associated Model: {part_code}<br/>
        Associated Robot Type: {line_type}<br/>
        Date Acquired: {date_acquired}<br/>
        Authenticity Code: {certificate}</p><br/>
    </div>
    <button onclick="location.href='/parts'" type="button">Back</button>
</div>
