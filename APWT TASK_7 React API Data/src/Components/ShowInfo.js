import React, {useState, useEffect} from "react";
import "bootstrap/dist/css/bootstrap.min.css";
import axios from "axios";
const ShowInfo = ()=>{
    const [posts, setPosts] = useState([]);

    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/rideHistory")
        .then(resp=>{
            console.log(resp.data);
            setPosts(resp.data);
        }).catch(err=>{
            console.log(err);
        });
    },[]);
    return(
        <div>
            <table className="table">
            <thead className="bg-light">
                <tr>
                    <th>customerName</th>
                    <th>customerPhone</th>
                    <th>pickupPoint</th>
                    <th>destination</th>
                    <th>length</th>
                    <th>cost</th>
                </tr>
                </thead>
                    {posts.map(post=>(
                   <tr key={post.id}>
                    <td >{post.customerName}</td>
                    <td >{post.customerPhone}</td>
                    <td >{post.pickupPoint}</td>
                    <td >{post.destination}</td>
                    <td >{post.length}</td>
                    <td >{post.cost}</td>
                </tr>
                    ))}
            </table>
        </div>
    )
}
export default ShowInfo;