
<script>
    let progress = 0;
    let invervalSpeed = 50;
    let incrementSpeed = 1;

    let progressx = 0;
    let invervalSpeedx = 50;
    let incrementSpeedx = 1;

    document.addEventListener("DOMContentLoaded", function(){
        let bar = document.getElementById('bar');
        progressInterval = setInterval(function(){
            progress += incrementSpeed;
            bar.value = progress;
            if(progress >= {{ $progress1 }}){
                clearInterval(progressInterval);
            }
        }, invervalSpeed);

        let bar2 = document.getElementById('bar2');
        progressInterval2 = setInterval(function(){
            progressx += incrementSpeedx;
            bar.value = progressx;
            if(progressx >= {{ $progress3 }}){
                clearInterval(progressInterval2);
            }
        }, invervalSpeedx);
    });
</script>