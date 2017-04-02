
<!-- Author: Aing Ragunathan

This file holds the formatting for the view output. -->


<div class="container">
  <h2>Business History</h2>         
  <table id="businessHistory" class="table table-striped" data-toggle="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Action</th>
            <th>Data</th>
            <th>Location</th>
            <th>Cost</th>
            <th>Revenue</th>
        </tr>
    </thead>
    <tbody>
        {history}
        <tr>
            <td>{date}</td>
            <td>{type}</td>
            <td>{data}</td>
            <td>{location}</td>
            <td>${cost}</td>
            <td>${revenue}</td>
        </tr>
        {/history}
    </tbody>
  </table>
</div>