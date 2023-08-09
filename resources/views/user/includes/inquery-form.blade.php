<div class="callUs-section">
          <div class="callUsCard-section">
            <div class="callUsCard">
              <div class="callUsCard-content">
                <p>What can we help you with?</p>
                <p>
                  Feel free to write to us. We usually respond within 24 hours!
                </p>
                <form action="{{url('/submitHelpForm')}}" method="post" class="callUsForm">
                    @csrf
                  <div class="form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Full name"
                      required
                      value="{{old('name')}}"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      placeholder="Email"
                      required
                      value="{{old('email')}}"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="tel"
                      name="phone_number"
                      pattern="^[6789]\d{9,9}$"
                      class="form-control"
                      placeholder="Mobile Number"
                      required
                      value="{{old('phone_number')}}"
                    />
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="course_type" required>
                      <option value="">Select One</option>
                      <option value="8th to 10th Class">8th to 10th Class</option>
                      <option value="11th to 12th Class">11th to 12th Class</option>
                      <option value="College Graduate">College Graduate</option>
                      <option value="Working Professional">Working Professional</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <textarea
                      name="comment"
                      placeholder="Query/Comment"
                      class="form-control"
                    >{{old('comment')}}</textarea>
                  </div>
                  <button
                    type="submit"
                    class="callUsbtn"
                    value="submit"
                    name="submit"
                    class="btn btn3"
                  >
                    Submit
                  </button>
                </form>
              </div>
              <div class="callUsCard-img">
                <img src="assets/images/call Us.png" alt="" />
              </div>
            </div>
          </div>
        </div>
