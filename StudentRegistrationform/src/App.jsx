import { useState } from "react";

export default function App() {
  const [isLogin, setIsLogin] = useState(true);

  const handleSubmit = async (e) => {
    e.preventDefault();
    const form = new FormData(e.target);

    const res = await fetch(
  `http://localhost:8000/${isLogin ? "login" : "register"}.php`,
  { method: "POST", body: form }
);


    const data = await res.text();

    if (data === "Success") {
      alert("Welcome " + form.get("username"));
    } else {
      alert(data);
    }
  };

  return (
    <div className="flex h-screen items-center justify-center bg-gray-100">
      <form onSubmit={handleSubmit}
        className="bg-white p-6 rounded shadow w-80 space-y-4">

        <h1 className="text-xl font-bold text-center">
          {isLogin ? "Login" : "Register"}
        </h1>

        <input name="username" required
          placeholder="Username"
          className="border p-2 w-full" />

        <input name="password" required
          type="password"
          placeholder="Password"
          className="border p-2 w-full" />

        <button className="bg-blue-500 text-white p-2 w-full rounded">
          {isLogin ? "Login" : "Register"}
        </button>

        <p
          onClick={() => setIsLogin(!isLogin)}
          className="text-blue-600 text-sm text-center cursor-pointer"
        >
          {isLogin ? "Create account" : "Already have account?"}
        </p>
      </form>
    </div>
  );
}
