<div class="col-md-4">
    <div class="footer-content">
        <div class="footer-head">
            <h4>information</h4>
            <p>
              {{ $info->info }}
            </p>
            <div class="footer-contacts">
                <p><span>Tel:</span> {{$info->phone}}</p>
                <p><span>Email:</span> {{ $info->email }}</p>
                <p><span>Working Hours:</span> {{ $info->work }}</p>
            </div>
        </div>
    </div>
</div>
