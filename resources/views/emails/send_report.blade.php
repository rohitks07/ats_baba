<style>
.table{
    border:1px solid white;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}
</style>
<div style="width:50%">
<p><?php echo $data['send_report']['email_contenrt'];"<br>" ?> </br></p>
<table class="table table-bordered mb-0">
        <thead>
            <tr>
                <th
                    style="text-align:center;color:white;background-color:rgb(10, 153, 247);padding:10px;">
                    Date</th>
                <th
                    style="text-align:center;color:white;background-color:rgb(10, 153, 247);padding:10px;">
                    Posted Job List</th>
                <th
                    style="text-align:center;color:white;background-color:rgb(10, 153, 247);padding:10px;">
                    Candidate List</th>
                <th
                    style="text-align:center;color:white;background-color:rgb(10, 153, 247);padding:10px;">
                    Application Created
                </th>
                <th
                    style="text-align:center;color:white;background-color:rgb(10, 153, 247);padding:10px;">
                    Application Forward
                    </th>
                {{-- <th>Action</th> --}}


            </tr>
        </thead>
        <tbody>
            @foreach ($data['toReturn']['week_report'] as $item)


            <tr>
                <td style="text-align:center;padding:5px;">
                    {{$item['week_date']}}</td>
                <td style="text-align:center;color:blue;padding:5px;">
                    <b>{{$item['job_created']}}</b></td>
                <td style="text-align:center;color:blue;padding:5px;">
                    <b>{{$item['candidate_created']}}</b></td>
                <td style="text-align:center;color:blue;padding:5px;">
                    <b>{{$item['client_submittal']}}</b></td>
                <td style="text-align:center;color:blue;padding:5px;">
                    <b>{{$item['application_submitted']}}</b></td>

            </tr>

            @endforeach
        </tbody>
    </table>
</div>