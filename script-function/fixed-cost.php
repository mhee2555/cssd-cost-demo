<script>
    $(function() {


        $("#btnClick1").click(function() {

            $("#textHeadChange").text('1 ครั้งต่อเดือน');

            $("#table_main1").attr('hidden', false);
            $("#table_main2").attr('hidden', true);
            $("#table_main3").attr('hidden', true);
            $("#table_main4").attr('hidden', true);


            // ===============================================
            $("#btnClick1").removeClass('btnClick_No_Fixed-cost');
            $("#btnClick1").addClass('btnClick_Fixed-cost');

            $("#btnClick2").removeClass('btnClick_Fixed-cost');
            $("#btnClick3").removeClass('btnClick_Fixed-cost');
            $("#btnClick4").removeClass('btnClick_Fixed-cost');

            $("#btnClick2").addClass('btnClick_No_Fixed-cost');
            $("#btnClick3").addClass('btnClick_No_Fixed-cost');
            $("#btnClick4").addClass('btnClick_No_Fixed-cost');
            // ===============================================

            // ===============================================
            $("#spanClick1_text1").addClass('btnClick_Span1_Fixed-cost');
            $("#spanClick1_text1").removeClass('btnClick_Span1_No_Fixed-cost');

            $("#spanClick2_text1").removeClass('btnClick_Span1_Fixed-cost');
            $("#spanClick3_text1").removeClass('btnClick_Span1_Fixed-cost');
            $("#spanClick4_text1").removeClass('btnClick_Span1_Fixed-cost');

            $("#spanClick2_text1").addClass('btnClick_Span1_No_Fixed-cost');
            $("#spanClick3_text1").addClass('btnClick_Span1_No_Fixed-cost');
            $("#spanClick4_text1").addClass('btnClick_Span1_No_Fixed-cost');
            // ===============================================


            // ===============================================
            $("#spanClick1_text2").addClass('btnClick_Span2_Fixed-cost');
            $("#spanClick1_text2").removeClass('btnClick_Span2_No_Fixed-cost');

            $("#spanClick2_text2").removeClass('btnClick_Span2_Fixed-cost');
            $("#spanClick3_text2").removeClass('btnClick_Span2_Fixed-cost');
            $("#spanClick4_text2").removeClass('btnClick_Span2_Fixed-cost');

            $("#spanClick2_text2").addClass('btnClick_Span2_No_Fixed-cost');
            $("#spanClick3_text2").addClass('btnClick_Span2_No_Fixed-cost');
            $("#spanClick4_text2").addClass('btnClick_Span2_No_Fixed-cost');
            // ===============================================

        });

        $("#btnClick2").click(function() {
            $("#textHeadChange").text('1 ครั้งต่อสัปดาห์');

            
            $("#table_main1").attr('hidden', true);
            $("#table_main2").attr('hidden', false);
            $("#table_main3").attr('hidden', true);
            $("#table_main4").attr('hidden', true);
            // ===============================================
            $("#btnClick2").removeClass('btnClick_No_Fixed-cost');
            $("#btnClick2").addClass('btnClick_Fixed-cost');

            $("#btnClick1").removeClass('btnClick_Fixed-cost');
            $("#btnClick3").removeClass('btnClick_Fixed-cost');
            $("#btnClick4").removeClass('btnClick_Fixed-cost');

            $("#btnClick1").addClass('btnClick_No_Fixed-cost');
            $("#btnClick3").addClass('btnClick_No_Fixed-cost');
            $("#btnClick4").addClass('btnClick_No_Fixed-cost');
            // ===============================================

            // ===============================================
            $("#spanClick2_text1").addClass('btnClick_Span1_Fixed-cost');
            $("#spanClick2_text1").removeClass('btnClick_Span1_No_Fixed-cost');

            $("#spanClick1_text1").removeClass('btnClick_Span1_Fixed-cost');
            $("#spanClick3_text1").removeClass('btnClick_Span1_Fixed-cost');
            $("#spanClick4_text1").removeClass('btnClick_Span1_Fixed-cost');

            $("#spanClick1_text1").addClass('btnClick_Span1_No_Fixed-cost');
            $("#spanClick3_text1").addClass('btnClick_Span1_No_Fixed-cost');
            $("#spanClick4_text1").addClass('btnClick_Span1_No_Fixed-cost');
            // ===============================================


            // ===============================================
            $("#spanClick2_text2").addClass('btnClick_Span2_Fixed-cost');
            $("#spanClick2_text2").removeClass('btnClick_Span2_No_Fixed-cost');

            $("#spanClick1_text2").removeClass('btnClick_Span2_Fixed-cost');
            $("#spanClick3_text2").removeClass('btnClick_Span2_Fixed-cost');
            $("#spanClick4_text2").removeClass('btnClick_Span2_Fixed-cost');

            $("#spanClick1_text2").addClass('btnClick_Span2_No_Fixed-cost');
            $("#spanClick3_text2").addClass('btnClick_Span2_No_Fixed-cost');
            $("#spanClick4_text2").addClass('btnClick_Span2_No_Fixed-cost');
            // ===============================================

        });

        $("#btnClick3").click(function() {
            $("#textHeadChange").text('1 ครั้งต่อวัน');

            $("#table_main1").attr('hidden', true);
            $("#table_main2").attr('hidden', true);
            $("#table_main3").attr('hidden', false);
            $("#table_main4").attr('hidden', true);
            // ===============================================
            $("#btnClick3").removeClass('btnClick_No_Fixed-cost');
            $("#btnClick3").addClass('btnClick_Fixed-cost');

            $("#btnClick2").removeClass('btnClick_Fixed-cost');
            $("#btnClick1").removeClass('btnClick_Fixed-cost');
            $("#btnClick4").removeClass('btnClick_Fixed-cost');

            $("#btnClick2").addClass('btnClick_No_Fixed-cost');
            $("#btnClick1").addClass('btnClick_No_Fixed-cost');
            $("#btnClick4").addClass('btnClick_No_Fixed-cost');
            // ===============================================

            // ===============================================
            $("#spanClick3_text1").addClass('btnClick_Span1_Fixed-cost');
            $("#spanClick3_text1").removeClass('btnClick_Span1_No_Fixed-cost');

            $("#spanClick2_text1").removeClass('btnClick_Span1_Fixed-cost');
            $("#spanClick1_text1").removeClass('btnClick_Span1_Fixed-cost');
            $("#spanClick4_text1").removeClass('btnClick_Span1_Fixed-cost');

            $("#spanClick2_text1").addClass('btnClick_Span1_No_Fixed-cost');
            $("#spanClick1_text1").addClass('btnClick_Span1_No_Fixed-cost');
            $("#spanClick4_text1").addClass('btnClick_Span1_No_Fixed-cost');
            // ===============================================


            // ===============================================
            $("#spanClick3_text2").addClass('btnClick_Span2_Fixed-cost');
            $("#spanClick3_text2").removeClass('btnClick_Span2_No_Fixed-cost');

            $("#spanClick2_text2").removeClass('btnClick_Span2_Fixed-cost');
            $("#spanClick1_text2").removeClass('btnClick_Span2_Fixed-cost');
            $("#spanClick4_text2").removeClass('btnClick_Span2_Fixed-cost');

            $("#spanClick2_text2").addClass('btnClick_Span2_No_Fixed-cost');
            $("#spanClick1_text2").addClass('btnClick_Span2_No_Fixed-cost');
            $("#spanClick4_text2").addClass('btnClick_Span2_No_Fixed-cost');
            // ===============================================
        });

        $("#btnClick4").click(function() {
            $("#textHeadChange").text('ต้นทุนต่อรอบ');

            $("#table_main1").attr('hidden', true);
            $("#table_main2").attr('hidden', true);
            $("#table_main3").attr('hidden', true);
            $("#table_main4").attr('hidden', false);
            // ===============================================
            $("#btnClick4").removeClass('btnClick_No_Fixed-cost');
            $("#btnClick4").addClass('btnClick_Fixed-cost');

            $("#btnClick2").removeClass('btnClick_Fixed-cost');
            $("#btnClick1").removeClass('btnClick_Fixed-cost');
            $("#btnClick3").removeClass('btnClick_Fixed-cost');

            $("#btnClick2").addClass('btnClick_No_Fixed-cost');
            $("#btnClick1").addClass('btnClick_No_Fixed-cost');
            $("#btnClick3").addClass('btnClick_No_Fixed-cost');
            // ===============================================

            // ===============================================
            $("#spanClick4_text1").addClass('btnClick_Span1_Fixed-cost');
            $("#spanClick4_text1").removeClass('btnClick_Span1_No_Fixed-cost');

            $("#spanClick2_text1").removeClass('btnClick_Span1_Fixed-cost');
            $("#spanClick1_text1").removeClass('btnClick_Span1_Fixed-cost');
            $("#spanClick3_text1").removeClass('btnClick_Span1_Fixed-cost');

            $("#spanClick2_text1").addClass('btnClick_Span1_No_Fixed-cost');
            $("#spanClick1_text1").addClass('btnClick_Span1_No_Fixed-cost');
            $("#spanClick3_text1").addClass('btnClick_Span1_No_Fixed-cost');
            // ===============================================


            // ===============================================
            $("#spanClick4_text2").addClass('btnClick_Span2_Fixed-cost');
            $("#spanClick4_text2").removeClass('btnClick_Span2_No_Fixed-cost');

            $("#spanClick2_text2").removeClass('btnClick_Span2_Fixed-cost');
            $("#spanClick1_text2").removeClass('btnClick_Span2_Fixed-cost');
            $("#spanClick3_text2").removeClass('btnClick_Span2_Fixed-cost');

            $("#spanClick2_text2").addClass('btnClick_Span2_No_Fixed-cost');
            $("#spanClick1_text2").addClass('btnClick_Span2_No_Fixed-cost');
            $("#spanClick3_text2").addClass('btnClick_Span2_No_Fixed-cost');
            // ===============================================
        });

    });
</script>