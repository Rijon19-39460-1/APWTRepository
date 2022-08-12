import React from 'react'
import axios from "axios"
import { useNavigate  } from "react-router-dom"


const RLogout = () => {
    const navigate  = useNavigate();
    let user = JSON.parse(localStorage.getItem('user'));

    var obj = {token: user.access_token};
    axios.post("http://127.0.0.1:8000/api/RLogout",obj)
    .then(resp=>{
        var data = resp.data;
        console.log(data);
        navigate('/Login');
    }).catch(err=>{
        console.log(err);
    });
}
export default RLogout