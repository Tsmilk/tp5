// <script  src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
//     <script>
//     $(function(){
//         // 刷新验证码
//         var verifyimg = $(".verifyimg").attr("src");
//         $(".reloadverify").click(function(){
//             if( verifyimg.indexOf('?')>0){
//                 $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
//             }else{
//                 $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
//             }
//         });
//     })
//     </script>