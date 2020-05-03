<form method="post" action="/hotels/store">
    @csrf
    Name: <input type="text" name="name" /><br />
    Address 1: <input type="text" name="address_1" /><br />
    Address 2: <input type="text" name="address_2" /><br />
    City: <input type="text" name="city" /><br />
    State: <input type="text" name="state" /><br />
    Zip: <input type="text" name="zip" /><br />
    Description: <input type="text" name="description" /><br />
    Image: <input type="text" name="image" /><br />
    <input type="submit" name="submit" value="Submit" />
</form>
