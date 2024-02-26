<?php
class Visitor {
    private $visitorName;
    private $visitorId;

    public function __construct($visitorName, $visitorId) {
        $this->visitorName = $visitorName;
        $this->visitorId = $visitorId;
    }

    public function getVisitorName() {
        return $this->visitorName;
    }

    public function getVisitorId() {
        return $this->visitorId;
    }

    public static function isCounted() {
        if (isset($_SESSION["iscounted"])) {
            return true;
        } else {
            $_SESSION["iscounted"] = true;
            return false;
        }
    }
}
?>
