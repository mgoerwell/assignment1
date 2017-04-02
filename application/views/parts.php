<!-- 
    This is the template for the parts page. It will load in all parts in the Database, seperated by part type
-->

<link rel="stylesheet" type="text/css" href="/assets/css/assembly.css"/>
<h1>Robot Parts</h1>
<div class="assemblyPartItems">
    <table class="table-responsive">
        <thead>
            <tr>
                <th><h2>Heads</h2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            {heads}
                <td>
                   <a href="/parts/{certificate}"><img src="/data/parts/head/{pic}.jpeg" title="Model: {model} Line: {line}"/></a>
                </td>
            {/heads}
            </tr>
        </tbody>
    </table>
</div>

<div class="assemblyPartItems">
    <table class="table-responsive">
        <thead>
            <tr>
                <th><h2>Torsos</h2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            {torsos}
                <td>
                   <a href="/parts/{certificate}"><img src="/data/parts/torso/{pic}.jpeg" title="Model: {model} Line: {line}"/></a>
                </td>
            {/torsos}
            </tr>
        </tbody>
    </table>
</div>

<div class="assemblyPartItems">
    <table class="table-responsive">
        <thead>
            <tr>
                <th><h2>Feet</h2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            {feet}
                <td>
                   <a href="/parts/{certificate}"><img src="/data/parts/feet/{pic}.jpeg" title="Model: {model} Line: {line}"/></a>
                </td>
            {/feet}
            </tr>
        </tbody>
    </table>
</div>

<!---Defines the two buttons on the webpage -->
<div class = "partsButtons">
    <button onclick="location.href='/parts/build'" type="button" class = "btn-lg btn-primary">Build Parts</button>
    <button onclick="location.href='/parts/box'" type="button" class = "btn-lg btn-primary">Buy More Parts</button>
</div>
