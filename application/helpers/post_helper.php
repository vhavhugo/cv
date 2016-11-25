<?php

Class Post {

    static function query_build() {
        $obj = (object) Post::get_all();
        return $obj;
    }

    static function get_all() {
        $sql_update = array();
        $sql_insert = array();
        foreach ($_POST as $key => $input) {
            $_POST[$key] = addslashes(trim($input));
            $sql_update[] = $key . " = '" . $_POST[$key] . "'";
        }
        $sql_update = implode(', ', $sql_update);
        $sql_insert = "(`" . implode("`,`", array_keys($_POST)) . "`) VALUES "
                . "('" . implode("','", array_values($_POST)) . "')";
        return array(
            'fields' => array_keys($_POST),
            'values' => array_values($_POST),
            'sql_update' => $sql_update,
            'sql_insert' => $sql_insert,
            'sql_fields' => "(`" . implode("`,`", array_keys($_POST)) . "`)",
            'sql_values' => "('" . implode("','", array_values($_POST)) . "')",
            'obj' => (object) array_combine(array_keys($_POST), array_values($_POST)),
            'JSON' => json_encode(array_combine(array_keys($_POST), array_values($_POST))),
        );
    }

    static function add($key, $value) {
        $_POST[$key] = trim($value);
    }

    static function drop($key) {
        if (isset($_POST[$key]))
            unset($_POST[$key]);
    }

    static function change($key, $value) {
        if (isset($_POST[$key])) {
            $_POST[$key] = trim($value);
            return $_POST[$key];
        }
    }

    static function crypt($key) {
        if (isset($_POST[$key])) {
            $_POST[$key] = md5(Post::get($key));
            return $_POST[$key];
        }
    }

    static function parse_string($key) {
        if (isset($_POST[$key])) {
            $_POST[$key] = addslashes(trim($_POST[$key]));
            return $_POST[$key];
        }
    }

    static function strip($str) {
        return stripslashes(trim($str));
    }

    static function drop_blank() {
        foreach ($_POST as $key => $input) {
            $_POST[$key] = ltrim(rtrim(trim($input)));
            if (empty($_POST[$key]))
                unset($_POST[$key]);
        }
    }

    static function get($key, $parse = null, $required = null) {
        if (isset($_POST[$key])) {
            if ($required != null && empty($_POST[$key])) {
                Page::_required($key);
                exit;
            }
            if ($parse != null) {
                if ($parse == 'string') {
                    return addslashes($_POST[$key]);
                } elseif ($parse == 'int') {
                    return intval($_POST[$key]);
                } else {
                    return ltrim(rtrim(trim($_POST[$key])));
                }
            } else {
                return ltrim(rtrim(trim($_POST[$key])));
            }
        } else {
            return false;
        }
    }

    static function set_moeda($key) {
        $pat = array('/\,/');
        $rep = array('.');
        if (isset($_POST[$key]) && !empty($_POST[$key])) {
            $_POST[$key] = preg_replace($pat, $rep, $_POST[$key]);
        }else{
            return 0;
        }
    }

    static function set_money_double($key) {
        $pat = array('/\,00/','/\./');
        $rep = array('','');
        if (isset($_POST[$key]) && !empty($_POST[$key])) {
            $_POST[$key] = preg_replace($pat, $rep, $_POST[$key]);
        }else{
            return 0;
        }
    }

    static function request($key, $parse = null, $required = null) {
        if (isset($_REQUEST[$key])) {
            if ($required != null && empty($_REQUEST[$key])) {
                Page::_required($key);
                exit;
            }
            if ($parse != null) {
                if ($parse == 'string') {
                    return addslashes($_REQUEST[$key]);
                } elseif ($parse == 'int') {
                    return intval($_REQUEST[$key]);
                } else {
                    return ltrim(rtrim(trim($_REQUEST[$key])));
                }
            } else {
                return ltrim(rtrim(trim($_REQUEST[$key])));
            }
        }
    }

    static function file($key) {
        if (isset($_FILES["$key"]))
            return $_FILES["$key"];
    }

    static function parse_str($post) {
        parse_str($post, $arr);
        return $arr;
    }

    static function parse2Obj($post) {
        parse_str($post, $arr);
        return (object) $arr;
    }

    static function parse2post($post) {
        foreach ($post as $key => $input) {
            $_POST[$key] = @addslashes(trim($input));
        }
        return $_POST;
    }

    static function ajax2post($key) {
        Post::parse2post(Post::parse(Post::get("$key")));
        Post::removeIndex("$key");
        return $_POST;
    }

    static function get_and_drop($key) {
        $str = "";
        if (isset($_POST[$key])) {
            $str = ltrim(rtrim(trim($_POST[$key])));
            if (isset($_POST[$key])) {
                unset($_POST[$key]);
            }
        }
        return $str;
    }

}
