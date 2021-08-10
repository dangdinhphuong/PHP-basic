
  <?php
    class CheckValid
    {
        public  $readFile = "file2.txt";
        function checkValidString($getString, $notContain, $contain)
        {
            if (strpos($getString, $notContain) == "" && strpos($getString, $contain) != "") {

                return true;
            } else {

                return false;
            }
        }
    }
    class CheckFile extends CheckValid
    {
          function setCheckfile(){
              return $this->readFile;
          }
        function getCheckfile($getString, $notContain, $contain)
        {
            if ($this->checkValidString($getString, $notContain, $contain) == true) {
                echo "Chuỗi  hợp lệ. chuỗi bao gồm " . count(explode('.', file_get_contents($this->readFile))) . " câu.";
            } else {
                echo "Chuỗi  không hợp lệ";
            }
        }
    }
    $checkValid = new CheckValid();
    $checkFile = new CheckFile();
    $checkFile->getCheckfile($checkFile->setCheckfile(), "add", "hiện");
    //    $checkValid->checkValidString("thực hiện yêu cầu trên", "add", "hiện");
    ?>