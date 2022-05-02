import { useEffect } from "react";
import { useNavigate, Route, Routes } from "react-router-dom";


import App from "./App"

function Redirect({ to }) {
  let navigate = useNavigate();
  useEffect(() => {
    navigate(to);
  });
  return null;
}


// usage
function App2(){
    return(
        <Routes>
            <Route path="/" element={<App />} />
        </Routes>)
}

export default App2;
